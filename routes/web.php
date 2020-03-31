<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/show', function () {
    return view('show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
