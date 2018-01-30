<?php

use Illuminate\Http\Request;

Route::get('pegawai', 'UserController@users');
Route::get('pegawai/{id}', 'UserController@profileById');
Route::post('pegawai', 'UserController@store');
Route::put('pegawai/{id}', 'UserController@update');
Route::delete('pegawai/{id}', 'UserController@delete');
