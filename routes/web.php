<?php


Route::resource('/video', 'VideoController')->middleware('auth','isAdmin');
Route::resource('/course', 'CourseController')->middleware('auth', 'isAdmin');

Auth::routes();

Route::post('/subscribe', 'SubscriptionController@create')->middleware('auth');
Route::post('/new-account', 'CustomersController@create')->middleware('auth');
Route::post('/purchase', 'PurchaseController@store')->middleware('auth');
Route::get('/payment', 'PaymentController@show')->middleware('auth');
Route::get('/settings/account', 'AccountsController@edit');
Route::get('/auth', 'AccountsController@get');
Route::put('/settings/account', 'AccountsController@update')->middleware('auth');

Route::get('/{vue_capture?}', function () {
    return view('app');
})->where('vue_capture', '^(?!storage).*$'); 