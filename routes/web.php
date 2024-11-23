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
Route::get('/familyBackground', [EmployeeController::class, 'familyBackground'])->name('familyBackground');
Route::get('/educationalBackground', [EmployeeController::class, 'educationalBackground'])->name('educationalBackground');
Route::get('/healthDetails', [EmployeeController::class, 'healthDetails'])->name('healthDetails');
Route::get('/dependents', [EmployeeController::class, 'dependents'])->name('dependents');
Route::get('/seminarsTraining', [EmployeeController::class, 'seminarsTraining'])->name('seminarsTraining');
Route::get('/researchPublication', [EmployeeController::class, 'researchPublication'])->name('researchPublication');

Route::get('/payslip', [EmployeeController::class, 'payslip'])->name('payslip');
Route::get('/leave', [EmployeeController::class, 'leave'])->name('leave');
Route::get('/documentRequest', [EmployeeController::class, 'documentRequest'])->name('documentRequest');



//Admin Route
Route::get('/registration', [AdminController::class, 'showRegistrationForm'])->name('registration.form');
Route::post('/register', [AdminController::class, 'register'])->name('register')->name('admin.register');
Route::get('/leaverequestadmin', [AdminController::class, 'leaverequestadmin'])->name('leaverequestadmin');
Route::get('/documentrequestadmin', [AdminController::class, 'documentrequestadmin'])->name('documentrequestadmin');
