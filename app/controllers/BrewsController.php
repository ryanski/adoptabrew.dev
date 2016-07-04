<?php

class BrewsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$brews = Brew::all();

		return View::make('brews.index')->with('brews', $brews);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('brews.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Brew::$rules);

		if ($validator->fails()) {
			Session::flash('errorMessage', 'Something went wrong.  Info is posted below.');
			Log::info('Validator fails', Input::all());
			return Redirect::back()->withInput()->withErrors($validator);

		} else { 
			$brew = new Brew();
			$brew->brewname = Input::get('brewname');
			$brew->description = Input::get('description');
			
			$brew->user_id = Auth::user()->id;
			$brew->goal = Input::get('goal');
			$brew->deadline = Input::get('deadline');
			$brew->video = Input::get('video');
			$brew->save();
			Session::flash('successMessage', 'This brew was successfully stored.');
			Log::info('Post successful');
			Log::info('Log message', array('context'=> Input::all()));
			return Redirect::action('BrewsController@index');

		}
		
		
		// echo 'Store the new brew';
		

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$brew = Brew::find($id);
		if(!$brew){
			App::abort(404);
		}

		return View::make('brews.show')->with('brew', $brew);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$brew = Brew::find($id);
		if(!$brew){
			App::abort(404);
		}

		return View::make('brews.edit')->with('brew', $brew);
		// echo "Edit brew # $id";
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$brew = Brew::find($id);
		// $brew= Input::all();

		// dd($brew);

		if(!$brew){
			App::abort(404);
		}

		$brew->brewname = Input::get('brewname');
		$brew->description = Input::get('description');

		$brew->save();
		Session::flash('successMessage', 'This brew was successfully updated.');
		return Redirect::action('BrewsController@show', array($brew->id));
		// echo "Update brew # $id";
	
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$brew = Brew::find($id);
		$brew->delete();
		Session::flash('successMessage', 'This brew was successfully deleted.');
		return Redirect::action('BrewsController@index');
	}


}
