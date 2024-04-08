<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AttractiesController;
use App\Http\Controllers\OpeningstijdenController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;


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
    return view('homepage');
});

Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');

Route::get('/attracties', [AttractiesController::class, 'index'])->name('attracties'); 

Route::get('/openingstijden', [OpeningstijdenController::class, 'index'])->name('openingstijden'); 

Route::get('/ticketprijzen', [TicketsController::class, 'index'])->name('ticketprijzen');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('postContact');

Route::get('/order', [OrderController::class, 'index'])->name('orderPageRef');

Route::post('/order', [OrderController::class, 'store'])->name('orderTicket');