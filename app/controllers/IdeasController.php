<?php

class IdeasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ideas = Idea::all();
		return $ideas;
		// return View::make('ideas.index');
		// echo 'Shows all ideas(index)';
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	

		return View::make('ideas.create');


		// echo 'Show form to create new idea';
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		$idea = new Idea();
		$idea->brewname = Input::get('brewname');
		$idea->description = Input::get('description');
		$idea->save();
		// echo 'Store the new idea';
		return Redirect::back()->withInput();
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$idea = Idea::find($id);
		return $idea;
		// echo "Show idea # $id";
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$idea = Idea::find($id);
		$idea->brewname = "Coolest Beer Ever";
		$idea->save();
		// echo "Edit idea # $id";
		return $idea;
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		echo "Update idea # $id";
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$idea = Idea::find($id);
		$idea->delete();
		// echo "Destroy idea # $id";
	}


}
