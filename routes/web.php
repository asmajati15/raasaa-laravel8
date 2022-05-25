<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
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
Route::get('web-raasaa-admin', [AdminController::class, 'index'])->name('dashboard.admin')->middleware('administrator');

Route::get('web-raasaa-login', [AdminController::class, 'login'])->name('login.admin')->middleware('guest');
Route::post('login', [AdminController::class, 'authenticate']);

Route::get('web-raasaa-forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get')->middleware('guest');
Route::post('web-raasaa-forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post')->middleware('guest');
Route::get('web-raasaa-reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get')->middleware('guest');
Route::post('web-raasaa-reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post')->middleware('guest');

Route::post('web-raasaa-logout', [AdminController::class, 'logout'])->name('logout.admin')->middleware('administrator');

Route::get('/web-raasaa-admin/menu/checkSlug', [DashboardMenuController::class, 'checkSlug'])->middleware('administrator');
Route::resource('web-raasaa-admin/menu', DashboardMenuController::class)->middleware('administrator');

Route::get('/web-raasaa-admin/type/checkSlug', [DashboardTypeController::class, 'checkSlug'])->middleware('administrator');
Route::resource('web-raasaa-admin/type', DashboardTypeController::class)->except('show')->middleware('administrator');

Route::get('/web-raasaa-admin/slider/checkSlug', [DashboardSlideController::class, 'checkSlug'])->middleware('administrator');
Route::resource('web-raasaa-admin/slide', DashboardSlideController::class)->except('create', 'store', 'show', 'destroy')->middleware('administrator');

// Administrator
// Route::get('signup', [AdminController::class, 'signup'])->middleware('administrator');
// Route::post('signup', [AdminController::class, 'store']);
Route::resource('web-raasaa-admin/user', AdministratorController::class)->except('show', 'edit', 'update');

Route::resource('web-raasaa-admin/order', OrderController::class)->middleware('auth');

// Routes User
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('{det:slug}', [HomeController::class, 'detail']);
