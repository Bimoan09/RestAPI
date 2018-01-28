<?php

use Illuminate\Http\Request;

Route::get('users', 'UserController@users');
Route::get('users/{id}', 'UserController@profileById');
