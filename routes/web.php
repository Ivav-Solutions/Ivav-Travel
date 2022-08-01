<?php

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

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);
Route::get('/about-us', [App\Http\Controllers\HomePageController::class, 'about_us']);
Route::get('/service/uk_study_program/under_graduate', [App\Http\Controllers\HomePageController::class, 'under_graduate']);
Route::get('/service/uk_study_program/post_graduate', [App\Http\Controllers\HomePageController::class, 'post_graduate']);
Route::get('/service/uk_global_talent_program', [App\Http\Controllers\HomePageController::class, 'uk_global_talent_program']);
Route::get('/faq', [App\Http\Controllers\HomePageController::class, 'faq']);
Route::get('/contact', [App\Http\Controllers\HomePageController::class, 'contact']);
Route::post('/contact-us', [App\Http\Controllers\HomePageController::class, 'contactConfirm']);
Route::get('/book_appointment', [App\Http\Controllers\HomePageController::class, 'book_appointment']);