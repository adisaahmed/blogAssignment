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

Route::get('/', 'ContentController@welcome');
Route::post('/content', 'ContentController@store');
// Route::get('/content/create', 'ContentController@create');
Route::get('/content/{id}', 'ContentController@show');
Auth::routes([
	'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');