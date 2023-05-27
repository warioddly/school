<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\SchoolController;
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


        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
        });


        Route::group(['prefix' => 'courses'], function () {
            Route::get('/', [App\Http\Controllers\CourseController::class, 'index'])->name('courses');
            Route::get('/create', [App\Http\Controllers\CourseController::class, 'create'])->name('courses.create');
            Route::post('/store', [App\Http\Controllers\CourseController::class, 'store'])->name('courses.store');
            Route::get('/{courses}', [App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');
            Route::get('/{courses}/edit', [App\Http\Controllers\CourseController::class, 'edit'])->name('courses.edit');
            Route::put('/{courses}/update', [App\Http\Controllers\CourseController::class, 'update'])->name('courses.update');
            Route::delete('/{courses}/delete', [App\Http\Controllers\CourseController::class, 'destroy'])->name('courses.destroy');
            Route::post('/search', [App\Http\Controllers\CourseController::class, 'search'])->name('courses.search');
        });


        Route::group(['prefix' => 'schedule'], function () {
            Route::get('/', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule');
            Route::get('/create', [App\Http\Controllers\ScheduleController::class, 'create'])->name('schedule.create');
        });


        Route::group(['prefix' => 'attentions'], function () {
            Route::get('/', [App\Http\Controllers\AttentionController::class, 'index'])->name('attentions');
            Route::get('/create', [App\Http\Controllers\AttentionController::class, 'create'])->name('attentions.create');
            Route::get('/edit/{id}', [App\Http\Controllers\AttentionController::class, 'edit'])->name('attentions.edit');
            Route::get('/show/{id}', [App\Http\Controllers\AttentionController::class, 'show'])->name('attentions.show');
            Route::post('/store', [App\Http\Controllers\AttentionController::class, 'store'])->name('attentions.store');
            Route::put('/update/{id}', [App\Http\Controllers\AttentionController::class, 'update'])->name('attentions.update');
            Route::delete('/delete/{id}', [App\Http\Controllers\AttentionController::class, 'destroy'])->name('attentions.destroy');

        });


        Route::group(['prefix' => 'groups'], function () {
            Route::get('/', [GroupController::class, 'index'])->name('groups');
            Route::get('/show/{id}', [GroupController::class, 'show'])->name('groups.show');
            Route::post('/store', [GroupController::class, 'store'])->name('groups.store');
            Route::post('/edit/{id}', [GroupController::class, 'update'])->name('groups.edit');
            Route::delete('/delete/{id}', [GroupController::class, 'destroy'])->name('groups.destroy');
        });


        Route::group(['prefix' => 'tags'], function () {
            Route::get('/', [App\Http\Controllers\TagController::class, 'index'])->name('tags');
            Route::post('/store', [App\Http\Controllers\TagController::class, 'store'])->name('tags.store');
            Route::patch('/update/{id}', [App\Http\Controllers\TagController::class, 'update'])->name('tags.update');
            Route::delete('/delete/{id}', [App\Http\Controllers\TagController::class, 'destroy'])->name('tags.destroy');
        });


        Route::group(['prefix' => 'notifications'], function () {
            Route::get('/', [App\Http\Controllers\NotificationController::class, 'index'])->name('notifications');
            Route::get('/create', [App\Http\Controllers\ScheduleController::class, 'create'])->name('notifications.create');
        });


        Route::group(['prefix' => 'school', 'middleware' => ['can:view users']], function () {
            Route::get('/students', [SchoolController::class, 'students'])->name('school.students');
            Route::get('/teachers', [SchoolController::class, 'teachers'])->name('school.teachers');
            Route::post('/update-student/{id}', [SchoolController::class, 'updateStudentGroup'])->name('school.student.update');
            Route::post('/update-teacher/{id}', [SchoolController::class, 'updateTeacherGroup'])->name('school.teacher.update');
        });


        Route::group(['prefix' => 'documents'], function () {
            Route::get('/', [App\Http\Controllers\DocumentController::class, 'index'])->name('documents');
            Route::get('/create', [App\Http\Controllers\DocumentController::class, 'create'])->name('documents.create');
            Route::post('/store', [App\Http\Controllers\DocumentController::class, 'store'])->name('documents.store');
        });


        Route::group(['prefix' => 'applications'], function () {
            Route::get('/', [App\Http\Controllers\ApplicationController::class, 'index'])->name('applications');
            Route::patch('/update/{id}', [App\Http\Controllers\ApplicationController::class, 'update'])->name('applications.update');
            Route::delete('/delete/{id}', [App\Http\Controllers\ApplicationController::class, 'destroy'])->name('applications.destroy');
        });


        Route::group(['prefix' => 'users', 'middleware' => ['can:view users']], function () {
            Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('users');
            Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
            Route::delete('/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
        });


        Route::group(['prefix' => 'roles', 'middleware' => ['can:view roles']], function () {
            Route::get('/', [App\Http\Controllers\RoleController::class, 'index'])->name('roles');
            Route::post('/store', [App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');
            Route::patch('/update/{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('roles.update');
            Route::delete('/delete/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('roles.destroy');
        });


    });


});
