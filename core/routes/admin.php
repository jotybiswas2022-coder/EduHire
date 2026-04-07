<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AccountController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\TeacherController;
use App\Http\Controllers\admin\PreferredClassController;
use App\Http\Controllers\admin\PreferredSubjectController;

Route::prefix('admin')->middleware('admin')->group(function () {

    // ===============================
    // Dashboard
    // ===============================
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard.index');
    });

    // ===============================
    // Account
    // ===============================
    Route::prefix('account')->controller(AccountController::class)->group(function () {
        Route::get('/', 'index')->name('account.index');
        Route::get('/edit', 'edit')->name('account.edit');
        Route::post('/update', 'update')->name('account.update');
    });

    // ===============================
    // Contact
    // ===============================
    Route::prefix('contact')->controller(ContactController::class)->group(function () {
        Route::get('/', 'index')->name('contact.index');
    });

    // ===============================
    // Teacher List CRUD
    // ===============================
    Route::prefix('teacher_list')->controller(TeacherController::class)->group(function () {
        Route::get('/', 'index')->name('teacher.index');
        Route::get('/create', 'create')->name('teacher.create');
        Route::post('/store', 'store')->name('teacher.store');
        Route::get('/edit/{id}', 'edit')->name('teacher.edit');
        Route::post('/update/{id}', 'update')->name('teacher.update');
        Route::delete('/delete/{id}', 'delete')->name('teacher.delete');
        Route::get('/approve/{id}',  'approve')->name('teacher.approve');
        Route::get('/reject/{id}',  'reject')->name('teacher.reject');
    });

    // ===============================
    // Preferred Class CRUD
    // ===============================
    Route::prefix('preferred_class')->controller(PreferredClassController::class)->group(function () {
        Route::get('/', 'index')->name('preferred_class.index');
        Route::get('/create', 'create')->name('preferred_class.create');
        Route::post('/store', 'store')->name('preferred_class.store');
        Route::get('/edit/{id}', 'edit')->name('preferred_class.edit');
        Route::post('/update/{id}', 'update')->name('preferred_class.update');
        Route::delete('/delete/{id}', 'delete')->name('preferred_class.delete');
    });

    // ===============================
    // Preferred Class CRUD
    // ===============================
    Route::prefix('preferred_subject')->controller(PreferredSubjectController::class)->group(function () {
        Route::get('/', 'index')->name('preferred_subject.index');
        Route::get('/create', 'create')->name('preferred_subject.create');
        Route::post('/store', 'store')->name('preferred_subject.store');
        Route::get('/edit/{id}', 'edit')->name('preferred_subject.edit');
        Route::post('/update/{id}', 'update')->name('preferred_subject.update');
        Route::delete('/delete/{id}', 'delete')->name('preferred_subject.delete');
    });
});