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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/addHobbie', 'UserController@addHobbie')->name('addHobbie');
Route::post('/addHobbie/save', 'UserController@hobbieSave')->name('hobbie.save');

Route::get('/edit', 'UserController@edit')->name('user.edit');
Route::post('/edit/update', 'UserController@update')->name('user.update');

//buscar usuario
Route::get('/findForm', 'UserController@findForm')->name('user.find');
Route::post('/findForm/search', 'UserController@find')->name('user.search');
