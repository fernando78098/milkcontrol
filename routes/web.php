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

Route::redirect('/', '/login', 301);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/leite' , 'LeiteController' );
Route::post('/leite_relatorio' , 'LeiteController@leite' )->name('relatorio');
Route::post('/grava_leite_lote' , 'LeiteController@gravaleite' )->name('gravaleitelote');
Route::get('/lançamento_leite_lote' , 'LeiteController@leitelote' )->name('lancamentoleitelote'); 


Route::resource('/micro' , 'MicroController' );
Route::delete('/micro/{id}', 'MicroController@destroy');

Route::resource('/coleta' , 'ColetaController' );
Route::delete('/coleta/{id}', 'ColetaController@destroy');
Route::post('/coletado' , 'ColetaController@coletado' )->name('coletado'); 
