<?php

namespace App\Http\Controllers;

use App\Models\MetodePembayaran;
use App\Models\Pembayaran;
use App\Models\RencanaPengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PembayaranController extends Controller
{
    //
    public function index()
    {
        $data = [
            'metode_pembayaran' => MetodePembayaran::all(),
            'pengeluaran'=> RencanaPengeluaran::all(),
            'pembayaran' => Pembayaran::orderBy('tanggal_pembayaran','desc')->with('rencana_pengeluaran')->paginate(5)
        ];

        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view("pembayaran.index" , $data);
    }

    public function tambah(){
        $data =[
            'metode' => MetodePembayaran::all('*'),
            'rencana'=> RencanaPengeluaran::all('*'),
        ];

        return view("pembayaran.tambah" , $data);
    }

    public function detail(Request $request){
        $id = $request->id;
        $data = [
            'metode_pembayaran' => MetodePembayaran::all(),
            'pengeluaran'=> RencanaPengeluaran::all(),
            'pembayaran' => Pembayaran::with(['rencana_pengeluaran','metode_pembayaran'])->find($id)
        ];

        // dd($data['pembayaran']);

        return view('pembayaran.detail' , $data);
    }

    public function destroy(Pembayaran $pembayaran, Request $request)
    {
        $curr_pembayaran = $pembayaran->newQuery()->find($request->id);
        if (!empty($curr_pembayaran->file) && Storage::disk('public')->exists($curr_pembayaran->file)) {
            Storage::disk('public')->delete($curr_pembayaran->file);
        }
        if ($curr_pembayaran->delete()) {
            return redirect()->to('/pembayaran')->with('error','Data Pembayaran berhasil dihapus');
        } else
            return redirect()->to('/pembayaran')->with('error','Data Pembayaran gagal dihapus');
    }
}