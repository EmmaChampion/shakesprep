<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('info/contact');
});

Route::post('/contact', function() {
    return redirect('/contact');
});