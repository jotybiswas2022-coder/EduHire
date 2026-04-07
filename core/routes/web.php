<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\TeacherController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider.
|
*/

// Homepage
Route::get('/', [SiteController::class, 'index'])->name('home');

// Contact form submission
Route::post('/contactus', [UserController::class, 'contactus']);

// Password reset
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');

// Profile routes (auth required)
Route::middleware('auth')->prefix('profile')->controller(ProfileController::class)->group(function () {
    Route::get('/', 'index');               
    Route::get('/edit', 'edit');
    Route::post('/update', 'update');
});

// Teacher list routes
Route::prefix('teacher_list')->controller(TeacherController::class)->group(function () {
    Route::get('/{class_id?}', 'teacherList')->name('teacher.list'); 
    Route::get('/{class_id?}/teacher_details/{teacher_id}', 'teacherDetails')->name('teacher.details'); 
});

// Authentication routes (login, register, etc.)
Auth::routes();

// Include admin routes
include('admin.php');