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

		return Response::json($chapters)
      ->header('Cache-Control', 'public, max-age=604800, pre-check=604800')
      ->header('Pragma', 'public')
      ->header('Expires', date(DATE_RFC822, strtotime(" 7 day")) );
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

		return Response::json($chapters)
      ->header('Cache-Control', 'public, max-age=604800, pre-check=604800')
      ->header('Pragma', 'public')
      ->header('Expires', date(DATE_RFC822, strtotime(" 7 day")) );
	}
}
