<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\MetodePembayaran;
use Illuminate\Http\Request;

class MetodePembayaranController extends Controller
{
    public function index()
    {

        $data = [
            'metode_pembayaran' => MetodePembayaran::orderBy('kode_metode')->paginate(5)
        ];

        return view('metodepembayaran.index', $data);
    }

    public function tambah()
    {
        return view('metodepembayaran.tambah');
    }

    public function simpan(Request $request)
    {
        $data = $request->validate([
            'nama_metode' => 'required'
        ]);

        $generatedId = DB::select('SELECT procedure_kode() AS generated_id')[0]->generated_id;
        $data['kode_metode'] = $generatedId;

        $dataInsert = MetodePembayaran::query()->create($data);
            if ($dataInsert) :
                return redirect('/metodepembayaran')->with('success', 'Metode Pembayaran baru berhasil ditambah');
            else :
                return redirect('/metodepembayaran/tambah')->with('error', 'Metode Pembayaran baru Gagal ditambah');
            endif;
    }

    public function destroy(Request $request, MetodePembayaran $metodePembayaran)
    {
        $curr_metode = $metodePembayaran->newQuery()->find($request->id);
        if ($curr_metode->delete()) {
            return redirect()->to('/metodepembayaran')->with('success', 'Data Pembayaran berhasil dihapus');
        } else
            return redirect()->to('/metodepembayaran')->with('error', 'Data Pembayaran gagal dihapus');
    }

    public function edit(Request $request)
    {
        $data = [
            'metode' => MetodePembayaran::find($request->id)
        ];

        // dd($data);
        
        return view('metodepembayaran.edit', $data);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'nama_metode' => 'required'
        ]);
        $update = MetodePembayaran::query()->find($request->id);

        if ($update->fill($data)->save()) {
            return redirect()->to('/metodepembayaran')->with('success', "Data Pembayaran berhasil diupdate");
        } else
            return redirect()->back()->with('error', "Data Pembayaran gagal diupdate");
    }
}
