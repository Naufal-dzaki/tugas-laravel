<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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
    return view('contents.content', [
        "title" => "Light Dashboard"
    ]);
});

Route::get('/dashboard2', function () {
    return view('contents.content2', [
        "title" => "Dark Dashboard"
    ]);
});


route::get('/produk', [ProdukController::class,"index"]);