<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KueController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
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

Route::get('/landingpage', function () {
    return view('landingpage.index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'check'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});

// Route::get('/pembayaran', function () {
//     return view('pembayaran.index');
// });

// Route::get('/kue', function () {
//     return view('kue.index');
// });
