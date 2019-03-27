<?php


Route::resource('/video', 'VideoController')->middleware('auth','isAdmin');

Auth::routes();

Route::get('/settings/account', 'AccountsController@edit');
Route::get('/auth', 'AccountsController@get');
Route::put('/settings/account', 'AccountsController@update')->middleware('auth');

Route::get('/{vue_capture?}', function () {
    return view('app');
})->where('vue_capture', '^(?!storage).*$'); 