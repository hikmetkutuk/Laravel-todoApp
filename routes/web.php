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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', [
    'uses' => 'TodosController@index',
    'as' => 'todo'
]);
Route::post('/create/todo', [
   'uses' => 'TodosController@add'
]);

Route::get('/todo/delete/{id}', [
   'uses' => 'TodosController@delete',
    'as' => 'todo.delete'
]);

Route::get('/todo/edit/{id}', [
    'uses' => 'TodosController@edit',
    'as' => 'todo.edit'
]);

Route::post('/todo/save/{id}', [
    'uses' => 'TodosController@save',
    'as' => 'todo.save'
]);

Route::get('/todo/completed/{id}', [
    'uses' => 'TodosController@completed',
    'as' => 'todo.completed'
]);