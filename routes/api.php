<?php

use Illuminate\Http\Request;

<<<<<<< HEAD
Route::get('pegawai', 'UserController@users');
Route::get('pegawai/{id}', 'UserController@profileById');
Route::post('pegawai', 'UserController@store');
Route::put('pegawai/{id}', 'UserController@update');
Route::delete('pegawai/{id}', 'UserController@delete');
=======
Route::get('users', 'UserController@users');
Route::get('users/{id}', 'UserController@profileById');
>>>>>>> f94ca10abcb4f924c27ef2270467ff9eca9c9069
