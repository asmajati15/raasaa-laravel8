<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdministratorController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\DashboardMenuController;
use App\Http\Controllers\Auth\DashboardTypeController;
use App\Http\Controllers\Auth\DashboardSlideController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Routes Admin

Route::get('web-raasaa-login', [AdminController::class, 'login'])->name('login.admin')->middleware('guest');
Route::post('login', [AdminController::class, 'authenticate']);

Route::get('web-raasaa-forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get')->middleware('guest');
Route::post('web-raasaa-forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post')->middleware('guest');
Route::get('web-raasaa-reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get')->middleware('guest');
Route::post('web-raasaa-reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post')->middleware('guest');

Route::post('web-raasaa-logout', [AdminController::class, 'logout'])->name('logout.admin')->middleware('auth');

Route::prefix('web-raasaa-admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
    
    Route::get('/menu/checkSlug', [DashboardMenuController::class, 'checkSlug'])->middleware('auth');
    Route::resource('/menu', DashboardMenuController::class)->middleware('auth');
    
    Route::get('/type/checkSlug', [DashboardTypeController::class, 'checkSlug'])->middleware('auth');
    Route::resource('/type', DashboardTypeController::class)->except('show')->middleware('auth');
    // Route::prefix('/type')->group(function () {
    //     Route::get('/', [DashboardTypeController::class, 'index'])->name('type.index')->middleware('auth');
    //     Route::post('/store', [DashboardTypeController::class, 'store'])->name('type.store')->middleware('auth');
    //     Route::get('/{slug}/edit', [DashboardTypeController::class, 'edit'])->name('type.edit')->middleware('auth');
    //     Route::post('/update/{slug}', [DashboardTypeController::class, 'update'])->name('type.update')->middleware('auth');
    //     Route::delete('/delete/{id}', [DashboardTypeController::class, 'destroy'])->name('type.delete')->middleware('auth');
    //     Route::get('/checkSlug', [DashboardTypeController::class, 'checkSlug'])->middleware('auth');
    // });

    // Route::get('/slider/checkSlug', [DashboardSlideController::class, 'checkSlug'])->middleware('auth');
    // Route::resource('/slide', DashboardSlideController::class)->except('create', 'store', 'show', 'destroy')->middleware('auth');
    
    // Administrator
    // Route::get('signup', [AdminController::class, 'signup'])->middleware('administrator');
    // Route::post('signup', [AdminController::class, 'store']);
    Route::resource('/user', AdministratorController::class)->except('show', 'edit', 'update')->middleware('administrator');
});

// Routes User
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('{det:slug}', [HomeController::class, 'detail']);
