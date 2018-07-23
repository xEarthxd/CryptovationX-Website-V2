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

Route::get('/', 'PagesController@getIndex');

Route::get('/faq', 'PagesController@getFaq');

Route::get('/loginorigin', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'PagesController@getBlog');

/*
|--------------------------------------------------------------------------
| Oneway Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('blog/{pair}', 'Blog\BlogController@getIndex')->name('blog.index');


Route::get('/careers', 'PagesController@getCareers');

Route::get('/cxa-terms-conditions', 'PagesController@getTerms_Conditions');
