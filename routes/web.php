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

Route::get('/{any?}', function () {
    return view('app');
})->middleware('Authenticate');
Route::resource('Videos', 'VideoController')->middleware('isAdmin');
Route::resource('Categories', 'CategoriesController');
Route::get('/search', 'VideoController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/settings/account', 'AccountsController@edit');
Route::get('/auth', 'AccountsController@get');
Route::put('/settings/account', 'AccountsController@update');