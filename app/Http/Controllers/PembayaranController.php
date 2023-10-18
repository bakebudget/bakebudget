<?php

namespace App\Http\Controllers;

use App\Models\MetodePembayaran;
use App\Models\Pembayaran;
use App\Models\RencanaPengeluaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    //
    public function index()
    {
        $data = [
            'metode_pembayaran' => MetodePembayaran::all(),
            'pengeluaran' => RencanaPengeluaran::all(),
            'pembayaran' => Pembayaran::orderBy('tanggal_pembayaran', 'desc')->with('rencana_pengeluaran')->paginate(5)
        ];
        return view("pembayaran.index", $data);
    }

    public function detail(Request $request)
    {
        $id = $request->id;
        $data = [
            'metode_pembayaran' => MetodePembayaran::all(),
            'pengeluaran' => RencanaPengeluaran::all(),
            'pembayaran' => Pembayaran::with(['rencana_pengeluaran', 'metode_pembayaran'])->find($id)
        ];

        // dd($data['pembayaran']);

        return view('pembayaran.detail', $data);
    }
}
