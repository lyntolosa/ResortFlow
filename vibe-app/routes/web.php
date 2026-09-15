<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/login', 'login')->name('login');
Route::post('/booking/guest-details', [HomeController::class, 'startBooking'])->name('booking.start');
Route::get('/stay', [HomeController::class, 'stay'])->name('stay');
Route::get('/details', [HomeController::class, 'details'])->name('details');
Route::redirect('/availability', '/stay')->name('availability');
Route::get('/addons', [HomeController::class, 'addons'])->name('addons');
Route::get('/guest-details', [HomeController::class, 'guestDetails'])->name('guest-details');
Route::post('/booking/save-guest-details', [HomeController::class, 'saveGuestDetails'])->name('booking.guest-details');
Route::post('/booking/update-stay', [HomeController::class, 'updateStay'])->name('booking.update-stay');
Route::post('/booking/confirm', [HomeController::class, 'confirmBooking'])->name('booking.confirm');
Route::get('/booking-summary', [HomeController::class, 'bookingSummary'])->name('booking-summary');
Route::get('/booking-confirmation', [HomeController::class, 'bookingConfirmation'])->name('booking-confirmation');
Route::post('/generate', [HomeController::class, 'generate'])->name('generate');
