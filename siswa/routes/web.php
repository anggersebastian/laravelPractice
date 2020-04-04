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

Route::get('/', 'StudentController@index')->name('home'); 
Route::get('/create', 'StudentController@create')->name('create'); 
Route::post('/create', 'StudentController@store')->name('store'); 
Route::get('/edit/{siswaId}', 'StudentController@edit')->name('edit');
Route::post('/update/{id}', 'StudentController@update')->name('update');
Route::delete('/delete/{id}', 'StudentController@delete')->name('delete');








Route::get('/loli', function () {
    return "loli";
});

Route::get('/user/{id}', function ($id) {
    return "Your ID is ".$id;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('landing');

Route::group(['prefix' => 'eloquent'], function () {
	Route::get('/', 'StudentEloquentController@index');
});

