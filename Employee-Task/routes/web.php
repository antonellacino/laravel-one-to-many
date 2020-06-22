<?php

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

Route::get('/', 'EmployeesController@index')->name('home');
Route::get('/editTask/{id}', 'EmployeesController@editTask')->name('editTask');
Route::post('/storeTask/{id}', 'EmployeesController@storeTask')->name('storeTask');
