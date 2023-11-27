<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JenisPengeluaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class JenisPengeluaranController extends Controller
{
    //
    public function index(): View
    {
        $data = [
            'jenis_pengeluaran' => JenisPengeluaran::all()
        ];

        return view('jenis_pengeluaran.index', $data);
    }

    public function tambah()
    {
        $data = [
            'jenis_pengeluaran' => JenisPengeluaran::all()
        ];
        
        return view('jenis_pengeluaran.tambah', $data);
    }

    public function simpan(Request $request)
    {
        $data = $request->validate([
            'nama_jenis_pengeluaran' => 'required',
        ]);

        if ($data) :

            $generatedId = DB::select('SELECT procedure_kode_jenis_pengeluaran() AS generated_id')[0]->generated_id;
            // dd($generatedId);

            $data['kode_jenis_pengeluaran'] = $generatedId;
            // dd($data);
            $dataInsert = JenisPengeluaran::query()->create($data);
            if ($dataInsert) :
                return redirect('/jenis_pengeluaran')->with('success', 'Jenis pengeluaran berhasil ditambah! :D');
            else :
                return redirect('/jenis_pengeluaran/tambah')->with('error', 'Jenis pengeluaran gagal ditambah.. :(');
            endif;
        endif;
    }

    public function hapus(JenisPengeluaran $jenisPengeluaran, Request $request)
    {
        $curr_jenisPengeluaran = $jenisPengeluaran->newQuery()->find($request->id);
        if (!empty($curr_jenisPengeluaran->file) && Storage::disk('public')->exists($curr_jenisPengeluaran->file)) {
            Storage::disk('public')->delete($curr_jenisPengeluaran->file);
        }
        if ($curr_jenisPengeluaran->delete()) {
            return redirect()->to('/jenis_pengeluaran')->with('success','Data jenis pengeluaran berhasil dihapus');
        } else
            return redirect()->to('/jenis_pengeluaran')->with('error','Data jenis pengeluaran gagal dihapus');
    }

}
