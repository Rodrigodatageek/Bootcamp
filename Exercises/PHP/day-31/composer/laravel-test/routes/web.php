<?php

use App\Http\Controllers\MovieController;
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



Route::get('/movies', 'MovieController@index');

Route::get('/movies/create', 'MovieController@create');

Route::post('/movies/store', 'MovieController@store');

Route::get('/movies/{id}', 'MovieController@show');

Route::delete('/movies/{id}', 'MovieController@delete');





Route::get('/about', 'AboutController@aboutUs');



