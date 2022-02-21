<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/top-rated-movies' , 'MovieController@movies');

Route::get('/', 'IndexController@index');

Route::get('/hello-world', 'SampleController@helloWorld');

Route::get('/hello-laravel', 'SampleController@helloLaravel');

