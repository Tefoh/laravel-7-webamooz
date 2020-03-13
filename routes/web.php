<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    // https://laravel.com/docs/helpers#fluent-strings
    $user = \App\User::find(2);

    $name = '   name : ' . $user->name;
    return \Illuminate\Support\Str::of($name)->trim()->ucfirst()->camel()->__toString();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
