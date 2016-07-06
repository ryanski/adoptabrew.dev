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

	public function postLogin(){
		$email = Input::get('email');
		$password = Input::get('password');

		if ( Auth::attempt( ['email' => $email, 'password' => $password] )){
			return Redirect::intended('/');
		} else {
			Session::flash('errorMessage' , 'invalid username or password');
			return Redirect::back();
		}
	}

	public function userLogout() {
		Auth::logout();
		// return Redirect::route('landingpage');
	}

}
