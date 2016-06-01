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
	return View::make('landingpage');
});

Route::get('/brews', function()
{
	return 'List of brews.';
});

Route::get('/createbrew', function()
{
	return 'Create a brew campaign.';
});

Route::get('/brew/{beerName}', 'HomeController@brewPage');

Route::resource('users', 'UsersController');

Route::resource('ideas', 'IdeasController');

Route::resource('brews', 'BrewsController');

Route::get('orm-test', function ()
{
	$ideas = Idea::all();
	return $ideas;
 //    $idea5 = new Idea();
	// $idea5->brewname = 'Eloquent is awesome!';
	// $idea5->description  = 'It is super easy to create a new post.';
	// $idea5->save();

	// $idea6 = new Idea();
	// $idea6->brewname = 'Post number two';
	// $idea6->description  = 'The body for post number two.';
	// $idea6->save();
});

	


