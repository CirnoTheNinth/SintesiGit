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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/characters/show', 'CharacterController@getCharacters');

Route::get('/characters/create', 'CharacterController@createCharacters');

Route::get('/characters/index', 'CharacterController@indexCharacters');

Route::get('/characters/modify/{charid}', 'CharacterController@modifyCharacters');