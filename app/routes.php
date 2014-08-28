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

// Route::get('/', function()

Route::get('/', array('as' => 'home', function()

{

	return View::make('home');
}));

Route::get('reports', array('as' => 'reports', function()

{

	return View::make('reports');
}));


Route::resource('admin/users', 'Admin_UsersController');

Route::resource('admin/reports', 'Admin_ReportsController');

Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);

Route::get('logout',['as' => 'logout', 'uses' => 'AuthController@logout']);
