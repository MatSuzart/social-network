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
    return view('login');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/entrar', function(){
    return view('login_entrar');
})->name('entrar');

Route::get('/cadastrar', function(){
    return view('login_cadastrar');
})->name('cadastrar');

