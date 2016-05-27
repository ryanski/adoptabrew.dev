<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function brewPage($beerName)
	{
		if($beerName == "budlight") {
		return Redirect::to('/');
		} else {

		$data = array('beerName' => $beerName);
		return View::make('my-first-view')->with($data);
		}
	}

}
