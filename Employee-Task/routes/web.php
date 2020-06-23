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

//Employee Routes
Route::get('/', 'TasksController@index')->name('home');
Route::get('/showEmployee/{id}','EmployeesController@showEmployee')->name('showEmployee');



//Task Routes
Route::get('/createTask', 'TasksController@createTask')->name('createTask');
Route::get('/showTask/{id}', 'TasksController@showTask')->name('showTask');
Route::get('/editTask/{id}', 'TasksController@editTask')->name('editTask');
Route::post('/storeTask/{id}', 'TasksController@storeTask')->name('storeTask');

