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

Route::get('/', 'homeController@home') -> name('home');
Route::get('/comic/show/{id}', 'homeController@show') -> name('show');
Route::get('/create', 'homeController@create') -> name('create');
Route::post('/store', 'homeController@store') -> name('store');

Route::get('comic/edit/{id}', 'homeController@edit') -> name('edit');

Route::post('update/{id}', 'homeController@update') -> name('update');
Route::get('comic/delete/{id}', 'homeController@delete') -> name('delete');






