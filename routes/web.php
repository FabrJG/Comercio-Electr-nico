<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/','home')->name('home');

Route::view('cliente','cliente')->name('cliente');

Route::view('producto','producto')->name('producto');

Route::view('pedido','pedido')->name('pedido');