<?php


Route::resource('/video', 'VideoController');
Route::resource('/course', 'CourseController');

Auth::routes();

Route::post('/subscribe', 'SubscriptionController@create')->middleware('auth');
Route::post('/new-account', 'CustomersController@create')->middleware('auth');
Route::post('/purchase', 'PurchaseController@store')->middleware('auth');
Route::get('/settings/account', 'AccountsController@edit');
Route::get('/auth', 'AccountsController@get');
Route::put('/settings/account', 'AccountsController@update')->middleware('auth');

Route::get('/{vue_capture?}', function () {
    return view('app');
})->where('vue_capture', '^(?!storage).*$'); 