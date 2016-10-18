<?php
// web/index.php
require_once 'config.php';
require_once __DIR__.'/../vendor/autoload.php';

//Setup app and caching headers
$app = new Silex\Application();
use Symfony\Component\HttpFoundation\Request as Request;
use Symfony\Component\HttpFoundation\Response as Response;
$app->after(function (Request $request, Response $response) {
    $responseHeaders = $response->headers;
    $responseHeaders->set('Cache-Control', 'public, max-age=604800, pre-check=604800');
    $responseHeaders->set('Pragma', 'public');
    $responseHeaders->set('Expires', date(DATE_RFC822, strtotime(" 7 day")) );
});

// Setup DB
use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;
$cfg = new \Spot\Config();
$cfg->addConnection('mysql', [
    'dbname' => DB_NAME,
    'user' => DB_USERNAME,
    'password' => DB_PASSWORD,
    'host' => DB_HOST,
    'driver' => 'pdo_mysql',
    'charset' => 'utf8'
]);
$spot = new \Spot\Locator($cfg);

class Song extends \Spot\Entity
{
    protected static $table = 'songs';
    public static function fields()
    {
        return [
            'id'          => ['type' => 'integer', 'primary' => true, 'autoincrement' => true],
            'chapter_id'  => ['type' => 'integer', 'required' => true],
            'title'       => ['type' => 'string', 'required' => true],
            'author'      => ['type' => 'string', 'required' => false],
            'melody'      => ['type' => 'string', 'required' => false],
            'text'        => ['type' => 'text', 'required' => true],
            'number'      => ['type' => 'integer', 'required' => true],
        ];
    }

    public static function relations(Mapper $mapper, Entity $entity)
    {
        return [
            'chapter' => $mapper->belongsTo($entity, 'Chapter', 'chapter_id')
        ];
    }
}

class Chapter extends \Spot\Entity
{
    protected static $table = 'chapters';
    public static function fields()
    {
        return [
            'id'      => ['type' => 'integer', 'primary' => true, 'autoincrement' => true],
            'chapter' => ['type' => 'string', 'required' => true],
        ];
    }

    public static function relations(Mapper $mapper, Entity $entity)
    {
        return [
            'songs' => $mapper->hasMany($entity, 'Song', 'chapter_id')->order(['number' => 'ASC']),
        ];
    }
}

$songMapper = $spot->mapper('Song');
$songMapper->migrate();
$chapterMapper = $spot->mapper('Chapter');
$chapterMapper->migrate();

//Setup routes
$app->get('/song', function (Silex\Application $app) use ($songMapper) {
    $songs = $songMapper->all()->execute();
    $songs = array_map(function($song) { 
        return array_intersect_key($song->data(), array_flip(['id', 'title','author','melody']));
    }, $songs->entities());
    return $app->json($songs, 200, array('X-Status-Code' => 200));
});

$app->get('/song/{id}', function (Silex\Application $app, $id) use ($songMapper) {
    $song = $songMapper->get($id);
    return $app->json($song);
});

$app->get('/chapter', function (Silex\Application $app) use ($chapterMapper) {
    $chapters = $chapterMapper->all()->with('songs');
    return $app->json($chapters);
});

$app->get('/chapter/{id}', function (Silex\Application $app, $id) use ($chapterMapper) {
    $chapter = $chapterMapper->select()->with('songs')->first(['id' => $id]);
    return $app->json($chapter->data(null, false, true));
});

$app->get('/', function (Silex\Application $app) {
    return $app->sendFile('partials/index.html');
});

$app->get('/offline', function(Silex\Application $app) {
    return $app->json(['online' => false]);
});
$app->get('/online', function(Silex\Application $app) {
    return $app->json(['online' => true]);
});

$app['debug'] = APP_DEBUG;
$app->run();
