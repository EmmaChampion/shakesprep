<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/contact', 'info/contact');
Route::post('/contact', function() {
    //Currently don't have email set up
    return redirect('/contact');
});

Route::view('about', 'info/about');

//Testing - Use Script model/controller later
Route::view('script', 'script/characterSelect');