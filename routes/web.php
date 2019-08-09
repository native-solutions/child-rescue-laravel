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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/page/{id}', 'HomeController@page')->name('page');
Route::get('/gallery/{id?}', 'HomeController@gallery')->name('gallery');
Route::Get('/news/{id}',     'HomeController@singleNews')->name('single-news');
Route::get('/ecomplain',     'HomeController@ecomplain')->name('ecomplain');
Route::post('/ecomplain',     'HomeController@ecomplainStore')->name('ecomplain.store');


/*
*-----------------------------------------------------------------
* Back Panel Routes 
*------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth', 'prefix' => 'root'], function(){

	Route::get     ('/',          'Backpanel\HomeController@index')->name('root');
	Route::resource('/menu',      'Backpanel\MenuController');
	Route::resource('/document',  'Backpanel\DocumentController');
	Route::resource('/downloads', 'Backpanel\DownloadController');
	Route::resource('/event',     'Backpanel\EventController');
	Route::resource('/slider',    'Backpanel\SliderController');
	Route::resource('/setting',   'Backpanel\SettingController');
	Route::resource('/quicklink', 'Backpanel\QuickLinkController');
	Route::resource('/news',      'Backpanel\NewsController');
	Route::resource('/ecomplain', 'Backpanel\ComplainController')->except(['edit','create','store','update']);
	Route::resource('/frontphoto', 'Backpanel\FrontpagePhotoController');




});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
