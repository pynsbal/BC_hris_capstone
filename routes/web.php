<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

//Employee Route
Route::resource('employees', EmployeeController::class);
Route::get('/profile', [EmployeeController::class, 'show'])->name('profile');
Route::get('/payslip', [EmployeeController::class, 'payslip'])->name('payslip');
Route::get('/leave', [EmployeeController::class, 'leave'])->name('leave');
Route::get('/documentRequest', [EmployeeController::class, 'documentRequest'])->name('documentRequest');


//Admin Route
Route::get('/registration', [AdminController::class, 'showRegistrationForm'])->name('registration');
