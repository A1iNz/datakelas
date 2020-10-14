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
    return view('Kelas.index');
});

Route::group(['prefix' => 'Kelas'], function() {
	Route::get('/', 'KelasController@index')->name('Kelas');
	Route::get('/get', 'KelasController@get')->name('Kelas.get');
	Route::post('/store', 'KelasController@store')->name('Kelas.store');
	Route::get('/edit/{id?}', 'KelasController@edit')->name('Kelas.edit');
	Route::get('/create', 'KelasController@create')->name('Kelas.create');
	Route::get('/delete/{id?}', 'KelasController@delete')->name('Kelas.delete');
	Route::post('/update/{id?}', 'KelasController@update')->name('Kelas.update');
});

