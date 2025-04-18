<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Debug;
Route::get('/', [Debug::class, 'index'])->name('index');
Route::get('/', [Debug::class, 'index'])->name('login');
Route::get('/', [Debug::class, 'homepage'])->name('home');
