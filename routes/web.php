<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;

Auth::routes();
Route::get("/", [MainController::class, "index"])->name("index");
Route::get('/home', [HomeController::class, 'index'])->name('home');
