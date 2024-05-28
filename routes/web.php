<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth:sanctum',  config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::view('/', 'web.auth.sections.admin.index')->name('admin.index');
        Route::view('/users', 'web.auth.sections.admin.users')->name('admin.users');
        Route::view('/roles', 'web.auth.sections.admin.roles')->name('admin.roles');

    });

    Route::middleware(['role:teacher'])->prefix('teacher')->group(function () {
        Route::view('/', 'web.auth.sections.teacher.index')->name('teacher.index');
    });

    Route::middleware(['role:student'])->prefix('student')->group(function () {
        Route::view('/', 'web.auth.sections.student.index')->name('student.index');
    });


    Route::middleware(['role:unassigned'])->prefix('unassigned')->group(function () {
        Route::view('/', 'web.auth.sections.unassigned.index')->name('unassigned.index');
    });
});
