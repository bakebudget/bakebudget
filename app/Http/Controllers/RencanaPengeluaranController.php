<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\JenisPengeluaran;
use App\Models\RencanaPengeluaran;
use Illuminate\Http\Request;

class RencanaPengeluaranController extends Controller
{
    //
    public function index(){
        $data =[
            'jenis_pengeluaran' => JenisPengeluaran::all(),
            'pengeluaran' => RencanaPengeluaran::orderBy('id_pengeluaran', 'desc')->with('jenis_pengeluaran')->paginate(5)
        ];

        // dd($data);
        return view("rencanapengeluaran.index", $data);
    }

    public function detail(Request $request)
    {
        $id = $request->id;
        $data = [
            'jenis_pengeluaran' => JenisPengeluaran::all(),
            'pengeluaran' => RencanaPengeluaran::with('jenis_pengeluaran')->find($id)
        ];

        // dd($data);

        return view('rencanapengeluaran.detail' , $data);
    }

    public function tambah()
    {
        $data = [
            'jenis_pengeluaran'=> JenisPengeluaran::all()
        ];

        return view('rencanapengeluaran.tambah', $data);
    }

    public function simpan(Request $request)
    {
        $data = $request->validate([
            'kode_jenis_pengeluaran' => 'required',
            'status' => 'required',
            'nominal' => 'required',
            'deskripsi' => 'required',
        ]);

        // dd($data);

        if ($data):
            

            $generatedId = DB::select('SELECT function_id_pengeluaran() AS generated_id')[0]->generated_id;


            $data['id_pengeluaran'] = $generatedId;
            // dd($data);
            $dataInsert = RencanaPengeluaran::query()->create($data);
            if ($dataInsert):
                return redirect('/rencanapengeluaran')->with('success', 'Data pembayaran baru berhasil ditambah');
            else:
                return redirect('/rencanapengeluaran/tambah')->with('error', 'Data pembayaran baru Gagal ditambah');
            endif;
        endif;
    }

    public function destroy(RencanaPengeluaran $pengeluaran, Request $request)
    {
        $curr_pengeluaran = $pengeluaran->newQuery()->find($request->id);

        if ($curr_pengeluaran->delete()) {
            return redirect()->to('/rencanapengeluaran')->with('success','Data Rencana Pengeluaran berhasil dihapus');
        } else
            return redirect()->to('/rencanapengeluaran')->with('error','Data Rencana Pengeluaran gagal dihapus');
    }

    public function edit(Request $request){
        $id = $request->id;
        $data = [
            'jenis_pengeluaran' => JenisPengeluaran::all(),
            'pengeluaran' => RencanaPengeluaran::with('jenis_pengeluaran')->find($id)
        ];

        // dd($data);

        return view('rencanapengeluaran.edit' , $data);
    }

    public function update(Request $request){
        $data = $request->validate([
            'kode_jenis_pengeluaran' => 'required',
            'status' => 'required',
            'nominal' => 'required',
            'deskripsi' => 'required'
        ]);

        $update = RencanaPengeluaran::query()->find($request->id);
        
        if ($update->fill($data)->save()) {
            return redirect()->to('/rencanapengeluaran')->with('success', "Data Pembayaran berhasil diupdate");
        } else
            return redirect()->back()->with('error', "Data Pembayaran gagal diupdate");
    }
}
