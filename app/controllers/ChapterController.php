<?php

class ChapterController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$chapters = Chapter::with(array('songs'=>function($query){
        $query->select('id', 'chapter_id', 'title')->orderBy('number', 'asc');
    }))->orderBy('id', 'asc')->get();

		$response = Response::json($chapters, 200, array('cache-control' => 'public'));

    $response->header('Cache-Control', 'public, max-age=604800, pre-check=604800');
    $response->header('Pragma', 'public');
    $response->header('Expires', date(DATE_RFC822, strtotime(" 7 day")) );

		return $response;
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$chapter = Chapter::with(array('songs'=>function($query){
        $query->select('id', 'chapter_id', 'title', 'author', 'melody')->orderBy('number', 'asc');
    }))->find($id);

		$response = Response::json($chapter, 200, array('cache-control' => 'public'));

    $response->header('Cache-Control', 'public, max-age=604800, pre-check=604800');
    $response->header('Pragma', 'public');
    $response->header('Expires', date(DATE_RFC822, strtotime(" 7 day")) );

		return $response;
	}


}
