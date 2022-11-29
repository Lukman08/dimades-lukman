<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MitraController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// --ROUTE PENGUNJUNG--
Route::get('/', function(){
    return view('welcome');
});

// --ROUTE DASHBOARD--
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth');
<<<<<<< HEAD
Route::resource('admin/mitra', MitraController::class)->middleware('auth')->names('mitra');
=======
Route::resource('/admin/mitra', MitraController::class)->middleware('auth')->names('mitra');

>>>>>>> 053c729 (kedua-fixed)

