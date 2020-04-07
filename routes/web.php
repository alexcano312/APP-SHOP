<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'testcontroller@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
