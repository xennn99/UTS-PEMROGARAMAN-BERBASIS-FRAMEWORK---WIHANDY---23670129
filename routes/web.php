<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\AboutController;
use App\Http\Controllers\Landing\ActivitiesController;
use App\Http\Controllers\Landing\BlogController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\TestimonialController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\SweetAlertController;

// ===== LANDING PAGE =====
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/activities', [ActivitiesController::class, 'index'])->name('activities');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');

// ===== ADMIN =====
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
    Route::get('/forms', [FormController::class, 'index'])->name('forms');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/tables', [TableController::class, 'index'])->name('tables');
    Route::get('/sweetalerts', [SweetAlertController::class, 'index'])->name('sweetalerts');
});