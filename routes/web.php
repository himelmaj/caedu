<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth:sanctum',  config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::view('/', 'web.auth.sections.admin.index')->name('admin.index');
        Route::view('/users', 'web.auth.sections.admin.users')->name('admin.users');
        Route::view('/roles', 'web.auth.sections.admin.roles')->name('admin.roles');
        Route::view('/calendar', 'web.auth.sections.admin.calendar')->name('admin.calendar');

        // Appointments
        Route::prefix('appointments')->group(function () {
            Route::post('/', [AppointmentController::class, 'store']);
            Route::get('/{id}', [AppointmentController::class, 'getAppointmentById']);
            Route::get('/sender/{sender_id}', [AppointmentController::class, 'getAppointmentsBySender']);
            Route::get('/receiver/{receiver_id}', [AppointmentController::class, 'getAppointmentsByReceiver']);
            Route::get('/search/users', [AppointmentController::class, 'searchUsers']);
        });

    });

    Route::middleware(['role:teacher'])->prefix('teacher')->group(function () {
        Route::view('/', 'web.auth.sections.teacher.index')->name('teacher.index');
    });

    Route::middleware(['role:student'])->prefix('student')->group(function () {
        Route::view('/', 'web.auth.sections.student.index')->name('student.index');
        Route::view('/calendar', 'web.auth.sections.student.calendar')->name('student.calendar');
    });


    Route::middleware(['role:unassigned'])->prefix('unassigned')->group(function () {
        Route::view('/', 'web.auth.sections.unassigned.index')->name('unassigned.index');
    });
});
