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

Route::get('/', function()
            {
                return view('welcome');
            });

Route::get('tasks','App\Http\Controllers\TaskController@index');

Route::get('tasks/{id}/edit','App\Http\Controllers\TaskController@edit');

Route::put('tasks/{id}','App\Http\Controllers\TaskController@update');

Route::post('tasks','App\Http\Controllers\TaskController@store');

Route::get('tasks/{id}','App\Http\Controllers\TaskController@destroy')->name('tasks.delete');