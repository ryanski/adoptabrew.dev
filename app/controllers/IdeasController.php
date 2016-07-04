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
		// $ideas = Idea::paginate(4);
		// return $ideas;
		return View::make('ideas.index')->with('ideas', $ideas);
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
		$validator = Validator::make(Input::all(), Idea::$rules);
		

		if ($validator->fails()) {
			Session::flash('errorMessage', 'Something went wrong.  Info is posted below.');
			Log::info('Validator fails', Input::all());
			return Redirect::back()->withInput()->withErrors($validator);

		} else { 
			$idea = new Idea();
			$idea->brewname = Input::get('brewname');
			$idea->description = Input::get('description');
			$idea->user_id = Auth::user()->id;
			$idea->save();
			Session::flash('successMessage', 'This idea was successfully stored.');
			Log::info('Post successful');
			Log::info('Log message', array('context'=> Input::all()));
			return Redirect::action('IdeasController@index');

		}
		
		
		// echo 'Store the new idea';
		
		
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
		if(!$idea){
			App::abort(404);
		}

		return View::make('ideas.show')->with('idea', $idea);
		// return $idea;
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
		if(!$idea){
			App::abort(404);
		}

		return View::make('ideas.edit')->with('idea', $idea);
		// echo "Edit idea # $id";
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	
		// dd($id);
		

		$idea = Idea::find($id);
		// $idea= Input::all();

		// dd($idea);

		if(!$idea){
			App::abort(404);
		}

		$idea->brewname = Input::get('brewname');
		$idea->description = Input::get('description');

		$idea->save();
		Session::flash('successMessage', 'This idea was successfully updated.');
		// If i don't add the return Redirect, I don't see the Session::flash.  Why??
		return Redirect::action('IdeasController@show', array($idea->id));
		// echo "Update idea # $id";
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
		Session::flash('successMessage', 'This idea was successfully deleted.');
		return Redirect::action('IdeasController@index');
		// echo "Destroy idea # $id";
	}


}
