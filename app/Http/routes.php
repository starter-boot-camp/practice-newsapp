<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	// $arr = array('title'=>"KK Hospital");
	$title = "KK Hospital";
    return view('welcome', compact('title'));
});

Route::get('/articles','ArticleController@index');