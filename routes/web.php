<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    \App\User::find(2)->update(['type' => 'ادمین']);
    return \App\User::all()->toArray();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
