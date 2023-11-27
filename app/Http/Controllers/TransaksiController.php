<?php

namespace App\Http\Controllers;

use App\Models\MetodePembayaran;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class TransaksiController extends Controller
{
    public function index()
    {
        $data = [
            'metode_pembayaran' => MetodePembayaran::all(),
            'transaksi' => Transaksi::all()
        ];

        return view('transaksi.index', $data);
    }

    public function add()
    {
        $data = [
            'metode' => MetodePembayaran::all()
        ];

        return view('transaksi.add', $data);
    }
}
