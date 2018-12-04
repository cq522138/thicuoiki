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

route::group(['prefix' => 'news'],function (){
    route::get('/','NewController@index')->name('index');
    route::get('/create','NewController@create')->name('create')->middleware('auth');
    route::post('/create','NewController@store')->name('store');
    route::get('/{id}/edit','NewController@edit')->name('edit')->middleware('auth');
    route::post('{id}/edit','NewController@update')->name('update');
    route::get('/{id}/destroy','NewController@destroy')->name('destroy')->middleware('auth');
    Route::get('/{id}/view', 'NewController@view')->name('view');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
