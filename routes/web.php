<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth;
use App\Http\Controllers\App;



Route::get('/', [Auth::class, 'index'])->name('login');
Route::post('/login', [Auth::class, 'login'])->name('post_login');
Route::get('/registration', [Auth::class,'registration'])->name('registration');

Route::get('/home', [App::class,'index'])->name('home');
Route::post('/register', [Auth::class,'register'])->name('register');
