<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KueController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\MetodePembayaranController;
use App\Http\Controllers\RencanaPengeluaranController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\JenisPengeluaranController;
use App\Http\Controllers\TransaksiController;
use App\Models\JenisPengeluaran;
use App\Models\Transaksi;
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
    return view('landing.index');
});

Route::get('/loginsementara', [LoginController::class, 'indexsementara']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'logincheck'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/kue', [KueController::class, 'index']);
    Route::get('/kue/add', [KueController::class, 'add']);
    Route::post('/kue/addsubmit', [KueController::class, 'addsubmit']);
    Route::get('/kue/hapus/{kode_kue}', [KueController::class, 'destroy']);
    Route::get('kue/detail/{kode_kue}', [KueController::class, 'detail']);
    Route::get('/kue/edit/{kode_kue}', [KueController::class, 'edit']);
    Route::post('/kue/update/{kode_kue}', [KueController::class, 'update']);

    Route::get('/transaksi', [TransaksiController::class, 'index']);
    Route::get('/transaksi/add', [TransaksiController::class, 'add']);

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/tambah', [UserController::class, 'tambah']);
    Route::post('/user/simpan', [UserController::class, 'simpan']);
    Route::get('/user/detail/{id}', [UserController::class, 'detail']);
    Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);



    Route::get('/pembayaran', [PembayaranController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);

    /**
     * Routing Pembayaran
     */
    Route::get('/pembayaran', [PembayaranController::class, 'index']);
    Route::get('/pembayaran/tambah', [PembayaranController::class, 'tambah']);
    Route::post('/pembayaran/simpan', [PembayaranController::class, 'simpan']);
    Route::get('/pembayaran/detail/{id}', [PembayaranController::class, 'detail']);
    Route::get('/pembayaran/edit/{id}', [PembayaranController::class, 'edit']);
    Route::post('/pembayaran/update/{id}', [PembayaranController::class, 'update']);
    Route::get('/pembayaran/hapus/{id}', [PembayaranController::class, 'destroy']);
    Route::get('/pembayaran/download', [PembayaranController::class, 'download']);
    Route::get('/pembayaran/cetak', [PembayaranController::class, 'print']);

    /**
     * Routing Rencana Pengeluaran
     */
    Route::get('/rencanapengeluaran', [RencanaPengeluaranController::class,'index']);
    Route::get('/rencanapengeluaran/tambah', [RencanaPengeluaranController::class,'tambah']);
    Route::post('/rencanapengeluaran/simpan', [RencanaPengeluaranController::class,'simpan']);
    Route::get('/rencanapengeluaran/detail/{id}', [RencanaPengeluaranController::class,'detail']);
    Route::get('/rencanapengeluaran/hapus/{id}', [RencanaPengeluaranController::class, 'destroy']);
    Route::get('/rencanapengeluaran/edit/{id}', [RencanaPengeluaranController::class, 'edit']);
    Route::post('/rencanapengeluaran/update/{id}', [RencanaPengeluaranController::class, 'update']);

    /**
     * Routing metode Pembayaran
     */
    Route::get('/metodepembayaran', [MetodePembayaranController::class,'index']);
    Route::get('/metodepembayaran/tambah', [MetodePembayaranController::class,'tambah']);
    Route::post('/metodepembayaran/simpan', [MetodePembayaranController::class,'simpan']);
    Route::get('/metodepembayaran/hapus/{id}', [MetodePembayaranController::class, 'destroy']);
    Route::get('/metodepembayaran/edit/{id}', [MetodePembayaranController::class, 'edit']);
    Route::post('/metodepembayaran/update/{id}', [MetodePembayaranController::class, 'update']);

    Route::get('/log', [LogController::class, 'index']);
    Route::get('/print_log', [LogController::class, 'print']);

    Route::get('/jenis_pengeluaran', [JenisPengeluaranController::class, 'index']);
    Route::get('/jenis_pengeluaran/tambah', [JenisPengeluaranController::class, 'tambah']);
    Route::post('/jenis_pengeluaran/simpan', [JenisPengeluaranController::class, 'simpan']);
    Route::get('/jenis_pengeluaran/hapus/{id}', [JenisPengeluaranController::class, 'hapus']);
});
