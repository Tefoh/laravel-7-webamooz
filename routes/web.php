<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
