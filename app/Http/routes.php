<?php
Route::get('/', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about');

Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');
Route::resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);