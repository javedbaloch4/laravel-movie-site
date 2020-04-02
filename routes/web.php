<?php

use Illuminate\Support\Facades\Route;


Route::get('/','MoviesController@index');
Route::view('/show','show');

Route::get('test', 'MoviesController@test');
