<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return inertia('Home');
})->name('home');

Route::inertia('/about-us','About')->name('about');
Route::inertia('/rate','Rate')->name('rate');
Route::inertia('/faq','FAQ')->name('faq');

Route::inertia('/login','Auth/Login')->name('login');



Route::inertia('/articles','Home')->name('articles');
Route::inertia('/submit','Home')->name('submit');
Route::inertia('/contact','Home')->name('contact');
