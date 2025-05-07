<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth;
use App\Http\Controllers\App;
use App\Http\Controllers\Admin;


Route::get('/', [Auth::class, 'index'])->name('login');
Route::post('/login', [Auth::class, 'login'])->name('post_login');
Route::get('/registration', [Auth::class,'registration'])->name('registration');
Route::post('/register', [Auth::class,'register'])->name('register');




Route::middleware(['auth'])->group(function (){ 
    Route::get('/home', [App::class,'index'])->name('home');
    Route::get('/list', [App::class,'list'])->name('list');
    Route::get('/upload', [App::class,'upload'])->name('upload');
    Route::post('/store_project', [App::class,'store'])->name('store');
    Route::post('/delete_project', [App::class,'delete'])->name('delete');
    Route::any('/download', [App::class,'download'])->name('download');
    Route::get('/logout', [Auth::class,'logout'])->name('logout');  



    Route::get('/admin/users', [Admin::class,'users'])->name('users');
    Route::get('/admin', [Admin::class,'index'])->name('admin');
});