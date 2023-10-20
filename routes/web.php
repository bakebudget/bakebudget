<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KueController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use Doctrine\DBAL\Schema\Index;
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
Route::post('/login', [LoginController::class, 'logincheck'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/kue', [KueController::class, 'index']);
    Route::get('/kue/add', [KueController::class, 'add']);

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/tambah', [UserController::class, 'tambah']);

    Route::get('/pembayaran', [PembayaranController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);

    /**
     * Routing Pembayaran
     */
    Route::get('/pembayaran', [PembayaranController::class,'index']);
    Route::get('/pembayaran/tambah', [PembayaranController::class,'tambah']);
    Route::post('/pembayaran/simpan', [PembayaranController::class,'simpan']);
    Route::get('/pembayaran/detail/{id}', [PembayaranController::class,'detail']);
    Route::get('/pembayaran/edit/{id}', [PembayaranController::class,'edit']);
    Route::post('/pembayaran/update/{id}', [PembayaranController::class,'update']);
    Route::get('/pembayaran/hapus/{id}', [PembayaranController::class,'destroy']);
    Route::get('/pembayaran/download', [PembayaranController::class,'download']);

    Route::get('/log', [LogController::class,'index']);
});


