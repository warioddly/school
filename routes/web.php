<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/applications/register', [App\Http\Controllers\ApplicationController::class, 'store'])->name('applications.store');


Route::group(['middleware' => 'auth'], function () {


    // Home Routes
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/analytics', [App\Http\Controllers\DashboardController::class, 'analytics'])->name('analytics');
        Route::get('/projects', [App\Http\Controllers\DashboardController::class, 'projects'])->name('projects');


        // Home Routes
        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
        });


        // Course Routes
        Route::group(['prefix' => 'courses'], function () {
            Route::get('/', [App\Http\Controllers\CourseController::class, 'index'])->name('courses');
            Route::get('/create', [App\Http\Controllers\CourseController::class, 'create'])->name('courses.create');
    //        Route::post('/store', [App\Http\Controllers\CourseController::class, 'store'])->name('courses.store');
    //        Route::get('/{courses}', [App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');
    //        Route::get('/{courses}/edit', [App\Http\Controllers\CourseController::class, 'edit'])->name('courses.edit');
    //        Route::put('/{courses}/update', [App\Http\Controllers\CourseController::class, 'update'])->name('courses.update');
    //        Route::delete('/{courses}/delete', [App\Http\Controllers\CourseController::class, 'destroy'])->name('courses.destroy');
        });


        // Schedule Routes
        Route::group(['prefix' => 'schedule'], function () {
            Route::get('/', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule');
            Route::get('/create', [App\Http\Controllers\ScheduleController::class, 'create'])->name('schedule.create');
        });


        // Schedule Routes
        Route::group(['prefix' => 'attentions'], function () {
            Route::get('/', [App\Http\Controllers\AttentionController::class, 'index'])->name('attentions');
            Route::get('/create', [App\Http\Controllers\AttentionController::class, 'create'])->name('attentions.create');
            Route::get('/edit/{id}', [App\Http\Controllers\AttentionController::class, 'edit'])->name('attentions.edit');
            Route::get('/show/{id}', [App\Http\Controllers\AttentionController::class, 'show'])->name('attentions.show');
            Route::post('/store', [App\Http\Controllers\AttentionController::class, 'store'])->name('attentions.store');
            Route::put('/update/{id}', [App\Http\Controllers\AttentionController::class, 'update'])->name('attentions.update');
            Route::delete('/delete/{id}', [App\Http\Controllers\AttentionController::class, 'destroy'])->name('attentions.destroy');

        });



        Route::group(['prefix' => 'courses'], function() {

            // Schedule Routes
            Route::group(['prefix' => 'materials'], function () {
                Route::get('/', [App\Http\Controllers\CourseController::class, 'index'])->name('courses.materials');
                // Route::get('/create', [App\Http\Controllers\AttentionController::class, 'create'])->name('video.courses.create');
                // Route::get('/edit/{id}', [App\Http\Controllers\AttentionController::class, 'edit'])->name('video.courses.edit');
                // Route::get('/show/{id}', [App\Http\Controllers\AttentionController::class, 'show'])->name('video.courses.show');
                // Route::post('/store', [App\Http\Controllers\AttentionController::class, 'store'])->name('video.courses.store');
                // Route::put('/update/{id}', [App\Http\Controllers\AttentionController::class, 'update'])->name('video.courses.update');
                // Route::delete('/delete/{id}', [App\Http\Controllers\AttentionController::class, 'destroy'])->name('video.courses.destroy');

            });

            // Schedule Routes
            Route::group(['prefix' => 'video'], function () {
                Route::get('/', [App\Http\Controllers\AttentionController::class, 'index'])->name('video.courses');
                Route::get('/create', [App\Http\Controllers\AttentionController::class, 'create'])->name('video.courses.create');
                Route::get('/edit/{id}', [App\Http\Controllers\AttentionController::class, 'edit'])->name('video.courses.edit');
                Route::get('/show/{id}', [App\Http\Controllers\AttentionController::class, 'show'])->name('video.courses.show');
                Route::post('/store', [App\Http\Controllers\AttentionController::class, 'store'])->name('video.courses.store');
                Route::put('/update/{id}', [App\Http\Controllers\AttentionController::class, 'update'])->name('video.courses.update');
                Route::delete('/delete/{id}', [App\Http\Controllers\AttentionController::class, 'destroy'])->name('video.courses.destroy');

            });

        });


        // Notification Routes
        Route::group(['prefix' => 'notifications'], function () {
            Route::get('/', [App\Http\Controllers\NotificationController::class, 'index'])->name('notifications');
            Route::get('/create', [App\Http\Controllers\ScheduleController::class, 'create'])->name('notifications.create');
        });


        // Notification Routes
        Route::group(['prefix' => 'applications'], function () {
            Route::get('/', [App\Http\Controllers\ApplicationController::class, 'index'])->name('applications');
            Route::patch('/update/{id}', [App\Http\Controllers\ApplicationController::class, 'update'])->name('applications.update');
            Route::delete('/delete/{id}', [App\Http\Controllers\ApplicationController::class, 'destroy'])->name('applications.destroy');
        });


        // User Routes
        Route::group(['prefix' => 'users', 'middleware' => ['can:view users']], function () {
            Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('users');
            Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
            Route::delete('/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
        });


        // Role Routes
        Route::group(['prefix' => 'roles', 'middleware' => ['can:view roles']], function () {
            Route::get('/', [App\Http\Controllers\RoleController::class, 'index'])->name('roles');
            Route::post('/store', [App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');
            Route::patch('/update/{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('roles.update');
            Route::delete('/delete/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('roles.destroy');
        });


    });


});
