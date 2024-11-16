<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::resource('employees', EmployeeController::class);
Route::get('/profile', [EmployeeController::class, 'show'])->name('profile');
