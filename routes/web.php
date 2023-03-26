<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Spatie\Honeypot\ProtectAgainstSpam;

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

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);
Route::get('/about-us', [App\Http\Controllers\HomePageController::class, 'about_us']);
Route::get('/service/uk_study_program/under_graduate', [App\Http\Controllers\HomePageController::class, 'under_graduate']);
Route::get('/service/uk_study_program/post_graduate', [App\Http\Controllers\HomePageController::class, 'post_graduate']);
Route::get('/service/uk_global_talent_program', [App\Http\Controllers\HomePageController::class, 'uk_global_talent_program']);
Route::get('/faq', [App\Http\Controllers\HomePageController::class, 'faq']);
Route::get('/contact', [App\Http\Controllers\HomePageController::class, 'contact']);
Route::post('/contact-us', [App\Http\Controllers\HomePageController::class, 'contactConfirm'])->middleware(ProtectAgainstSpam::class);;
Route::get('/book_consultation', [App\Http\Controllers\HomePageController::class, 'book_consultation']);
Route::post('/request_quote', [App\Http\Controllers\HomePageController::class, 'request_quote']);


Route::post('/uk_study_program', [App\Http\Controllers\HomePageController::class, 'uk_study_program']);
Route::get('/uk_study_program/consultation/success/{id}', [App\Http\Controllers\HomePageController::class, 'consultation_success'])->name('consultation.success');
Route::post('/uk_study_program/pay/consultation_fee/{id}', [App\Http\Controllers\HomePageController::class, 'pay_consultation_fee'])->name('make.payment');
Route::post('/uk_global_talent_program', [App\Http\Controllers\HomePageController::class, 'post_uk_global_talent_program']);
Route::get('/payment/callback', [App\Http\Controllers\HomePageController::class, 'handleGatewayCallback'])->name('user.handleGatewayCallback');
Route::get('/consultation/successfully', [App\Http\Controllers\HomePageController::class, 'consultation_successfully'])->name('consultation.successful');


Auth::routes();

// Admin
Route::get('/admin/login', [App\Http\Controllers\HomePageController::class, 'admin_login']);
Route::post('/admin/login', [App\Http\Controllers\HomePageController::class, 'login_admin'])->name('login.admin');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin/consultation/undergraduate', [App\Http\Controllers\AdminController::class, 'undergraduate'])->name('admin.undergraduate');
    Route::get('/admin/consultation/postgraduate', [App\Http\Controllers\AdminController::class, 'postgraduate'])->name('admin.postgraduate');
    Route::get('/admin/consultation/uk_global_talent_program', [App\Http\Controllers\AdminController::class, 'uk_global_talent_program'])->name('admin.uk_global_talent_program');
    Route::get('/admin/transactions', [App\Http\Controllers\AdminController::class, 'transactions'])->name('admin.transactions');
    Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/admin/profile/update', [App\Http\Controllers\AdminController::class, 'update_profile'])->name('admin.update.profile');
    Route::post('/admin/password/update', [App\Http\Controllers\AdminController::class, 'update_password'])->name('admin.update.password');
    Route::get('/admin/download/{id}', [App\Http\Controllers\AdminController::class, 'download'])->name('admin.download');
});
