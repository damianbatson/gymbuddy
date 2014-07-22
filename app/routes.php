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

Route::get('/', 'HomeController@index');

Route::get('projects', 'ProjectsController@index');
Route::get('projects/{id}', 'ProjectsController@show');

// Route::group(array('prefix' => 'api'), function() {

// 	// since we will be using this just for CRUD, we won't need create and edit
// 	// Angular will handle both of those forms
// 	// this ensures that a user can't access api/create or api/edit when there's nothing there
// 	Route::resource('projects', 'ProjectsController', 
// 		array('only' => array('index', 'store', 'destroy')));
// });
Route::get('auth/login', 'AuthController@getLogin');
Route::post('auth/login', 'AuthController@postLogin');
Route::get('auth/register', 'AuthController@getRegister');
Route::post('auth/register', 'AuthController@postRegister');

Route::group(array('before' => 'auth.basic'), function(){

	Route::get('admin', 'AdminController@index');
	Route::get('logout', 'AuthController@logout');
	Route::resource('portfolios', 'PortfoliosController');
});

// =============================================
// CATCH ALL ROUTE =============================
// =============================================
// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
// App::missing(function($exception)
// {
// 	return View::make('site.index');
// });
