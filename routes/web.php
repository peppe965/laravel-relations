<?php

use App\Http\Controllers\ComicController;
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

// Route::get('/comics', 'ComicController@index');

// Route::get('/genres', 'GenreController@index');

// Route::get('comics-ajax', 'ComicController@indexAjax');

Route::resource('comics', 'ComicController');