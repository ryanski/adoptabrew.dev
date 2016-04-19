<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/brews', function()
{
	return 'List of brews.';
});

Route::get('/createbrew', function()
{
	return 'Create a brew campaign.';
});

Route::get('/brew/{beerName}', function($beerName)
{
	if($beerName == "budlight") {
		return Redirect::to('/');
	} else {

	$data = array('beerName' => $beerName);
	return View::make('my-first-view')->with($data);

	}
});
