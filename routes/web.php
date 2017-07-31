<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('backend.dashboard.index');
});

Route::group(['namespace' => 'Backend'], function () {
	Route::get('login', 'AuthController@login');
	Route::post('logout', 'AuthController@logout');

	// Add Middleware Backend Authentication with Guard 'api'
	Route::group(['namespace' => 'Backend', 'prefix' => 'backend', 'middleware' => 'backauth'], function () {

	});

});
