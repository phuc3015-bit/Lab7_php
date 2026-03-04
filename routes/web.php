<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

// Bai 1
Route::get('/', function () {
    return view('welcome'); });
Route::get('/', [HomeController::class, 'index']);

// Bai 2
Route::get('/products', [ProductController::class, 'list']);

Route::view('/home', 'home');
Route::view('/contact', 'contact');

Route::get('/bang-cuu-chuong/{n}', [HomeController::class, 'multiplication']);
