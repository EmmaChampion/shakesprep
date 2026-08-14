<?php

use App\Http\Controllers\ScriptController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/contact', 'info/contact');
Route::post('/contact', function() {
    //Currently don't have email set up
    return redirect('/contact');
});

Route::view('about', 'info/about');

//Testing - Use Script model/controller later
Route::get('/script', [ScriptController::class, 'index']);
Route::post('/script', [ScriptController::class, 'create']);