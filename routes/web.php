<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/jacksonville-photo-booth', 'locations.jacksonville')->name('locations.jacksonville');
Route::view('/privacy-policy', 'legal.privacy')->name('privacy');
Route::view('/terms-of-service', 'legal.terms')->name('terms');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'submit'])->name('contact.submit')->middleware('throttle:contact');
