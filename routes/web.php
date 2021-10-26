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
    return view('layout.content', [
        "title" => "Light Dashboard"
    ]);
});

Route::get('/dashboard2', function () {
    return view('layout2.content2', [
        "title" => "Dark Dashboard"
    ]);
});


Route::get('layout.master', function () {
    return view('layout.content');
});
