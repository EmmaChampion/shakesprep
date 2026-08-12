<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/contact', 'info/contact');
Route::post('/contact', function() {
    //Currently don't have email set up
    return redirect('/contact');
});

Route::view('about', 'info/about');