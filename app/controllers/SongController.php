<?php

class SongController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    $response = Response::json(Song::select(['id', 'title', 'author', 'melody'])->orderBy('chapter_id', 'asc')->orderBy('number', 'asc')->get());

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
  public function show($id) {
    $response = Response::json(Song::find($id), 200, array('cache-control' => 'public'));

    $response->header('Cache-Control', 'public, max-age=604800, pre-check=604800');
    $response->header('Pragma', 'public');
    $response->header('Expires', date(DATE_RFC822, strtotime(" 7 day")) );

    return $response;
  }


}
