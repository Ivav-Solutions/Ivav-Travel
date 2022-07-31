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
Route::get('/service/web_application_development', [App\Http\Controllers\HomePageController::class, 'web_application_development']);
Route::get('/service/travel_consultancy', [App\Http\Controllers\HomePageController::class, 'travel_consultancy']);
Route::get('/faq', [App\Http\Controllers\HomePageController::class, 'faq']);
Route::get('/contact', [App\Http\Controllers\HomePageController::class, 'contact']);
Route::post('/contact-us', [App\Http\Controllers\HomePageController::class, 'contactConfirm']);
Route::get('/book_appointment', [App\Http\Controllers\HomePageController::class, 'book_appointment']);