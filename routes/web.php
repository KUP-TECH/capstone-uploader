<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Debug;




Route::get('/', [Debug::class, 'index'])->name('index');
Route::get('/login', [Debug::class, 'login'])->name('login');
Route::get('/home', [Debug::class, 'homepage'])->name('home');
Route::get('/listofcapstone', [Debug::class, 'listofcapstone'])->name('list');
Route::get('/uploadproject', [Debug::class, 'uploadaproject'])->name('uploads');
