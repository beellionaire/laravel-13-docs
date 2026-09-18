<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route group
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
});


// Dynamic Route : biasanya digunakan untuk detail, update dan delete
Route::get('user/{id}', function ($id) {
    return 'Hai user : ' . $id;
});

// multiple dynamic route
Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'Halo ' . $name . ' with id => ' . $id;
});

// optional and default value
Route::get('/user/{name?}', function ($name = "Hasan") {
    return 'user' . $name;
});


// route fallback : custom error
Route::fallback(function () {
    return 'Halaman tidak tersedia';
});
