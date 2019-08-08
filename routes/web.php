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
    return view('welcome');
});


/*
*-----------------------------------------------------------------
* Back Panel Routes 
*------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth', 'prefix' => 'root'], function(){

	Route::get     ('/',          'Backpanel\HomeController@index');
	Route::resource('/menu',      'Backpanel\MenuController');
	Route::resource('/document',  'Backpanel\DocumentController');
	Route::resource('/downloads', 'Backpanel\DownloadController');
	Route::resource('/event',     'Backpanel\EventController');



});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
