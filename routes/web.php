<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Http\Controllers\taskController;
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

Route::get('/','App\Http\Controllers\taskController@index');

Route::get('/tasks','App\Http\Controllers\taskController@index');

Route::get('create', 'App\Http\Controllers\taskController@create');

Route::get('save', 'App\Http\Controllers\taskController@store');

Route::get('delete/{id}', 'App\Http\Controllers\taskController@destroy');

Route::get('edit/{id}', 'App\Http\Controllers\taskController@edit');

Route::get('update/{id}', 'App\Http\Controllers\taskController@update');
