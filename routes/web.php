<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('register', 'register')->name('register');
Route::view('registration-success', 'registration-success')->name('registration-success');