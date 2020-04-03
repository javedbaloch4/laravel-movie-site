<?php

use Illuminate\Support\Facades\Route;


Route::get('/','MoviesController@index');
Route::get('/movies/{movie}','MoviesController@show')->name('movies.show');

Route::get('test', 'MoviesController@test');
