<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    $message_welcome = "Welcome to Laravel!!";
    return view('welcome', compact('message_welcome'));
});

Route::get('/home', function () {
    $message = "Hello World!";
    return view('home', compact('message'));
});

Route::get('/features', function () {
    $features = "Laravel does it all!!";
    return view('features', compact('features'));
});

Route::get('/pricing', function () {
    $pricing = "10 milioni di euro";
    return view('pricing', compact('pricing'));
});
