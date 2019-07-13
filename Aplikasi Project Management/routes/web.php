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
Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// });

/*Route::get('/login', 'MemberController@login');
Route::post('/postlogin', 'MemberController@postlogin');
Route::get('/logout', 'MemberController@logout');*/

Route::get('/', 'DashboardController@index');

Route::get('/project', 'ProjectController@index');
Route::post('/project/create', 'ProjectController@create');
Route::get('/project/{id}/edit', 'ProjectController@edit');
Route::post('/project/{id}/update', 'ProjectController@update');
Route::get('/project/{id}/delete', 'ProjectController@delete');
//Route::get('/project/{id}/task', 'ProjectController@task');
Route::get('/project/export', 'ProjectController@export');

Route::get('/task/{id}', 'TaskController@index');
Route::post('/task/create/{id}', 'TaskController@create')->name('create-task');
Route::get('/task/{id}/edit', 'TaskController@edit');
Route::post('/task/{id}/update', 'TaskController@update')->name('update-task');
Route::get('/task/{id}/delete', 'TaskController@delete');
Route::get('/task/export', 'TaskController@export');

Route::get('/user', 'MemberController@index');
Route::post('/user/create', 'MemberController@create');
Route::get('/user/{id}/edit', 'MemberController@edit');
Route::post('/user/{id}/update', 'MemberController@update');
Route::get('/user/{id}/delete', 'MemberController@delete');

Route::get('/agenda', 'AgendaController@index');
Route::post('/agenda/create', 'AgendaController@create');
Route::get('/agenda/{id}/edit', 'AgendaController@edit');
Route::post('/agenda/{id}/update', 'AgendaController@update');
Route::get('/agenda/{id}/delete', 'AgendaController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
