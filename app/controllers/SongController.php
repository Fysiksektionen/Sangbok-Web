<?php

class SongController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Song::select(['id', 'title', 'author', 'melody'])->orderBy('chapter_id', 'asc')->orderBy('number', 'asc')->get());
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Song::find($id));
	}


}
