<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kue;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class KueController extends Controller
{
    public function index()
    {
        $kue = Kue::all(); // mengambil data kue
        return view('kue.index', ['kue' => $kue]);
        // return view('kue.index', $kue);
    }

    public function add()
    {
        return view('kue.add');
    }

    public function addsubmit(Request $request)
    {
        $data = $request->validate([
            'nama_kue' => 'required',
            'stok_kue' => 'required',
            'harga_kue' => 'required|integer',
            'gambar_kue' => 'mimes:png,jpg,jpeg,csv,txt,pdf',
        ]);


        if ($data) :

            $file = $request->file('gambar_kue');
            $filename = '';

            if ($file) {
                $filename = time() . '_' . $file->getClientOriginalName();
            }
            $generatedId = DB::select('SELECT procedure_kodekue() AS generated_id')[0]->generated_id;


            $data['kode_kue'] = $generatedId;
            $data['gambar_kue'] = $filename;


            $dataInsert = Kue::query()->create($data);
            if ($dataInsert) :
                if ($file) {
                    $file->storePubliclyAs('', $filename, 'public');
                }
                return redirect('/kue')->with('success', 'Stok baru berhasil ditambah :D');
            else :
                return redirect('/kue/add')->with('error', 'Stok baru gagal ditambah :(');
            endif;
        endif;
    }

    public function destroy(Kue $kue, Request $request)
    {
        $delete_kue = $kue->newQuery()->find($request->kode_kue);
        if (!empty($delete_kue->file) && Storage::disk('public')->exists($delete_kue->file)) {
            Storage::disk('public')->delete($delete_kue->file);
        }
        if ($delete_kue->delete()) {
            return redirect()->to('/kue')->with('success', 'Data kue sudah di hapus :(');
        } else
            return redirect()->to('/kue')->with('error', 'Data kue gagal dihapus :0');
    }
}
    // public function store(Request $request) 
    // {
    //     $validasiData = $request->validate([
    //         'nama_kue' => 'required',
    //         'stok_kue' => 'required',
    //         'harga_kue' => 'required',
    //     ]);

    //     Kue::create($validasiData);

    //     return redirect()->route('kue.index')->with('success', 'Data added succesfully');
    // }

    // public function update(Request $request, Kue $kue)
    // {
    //     // validasi dan update data kue
    //     $validasiData = $request->validate([
    //         'name' => 'required',
    //         'description' => 'required',
    //     ]);

    //     $kue->update($validasiData);

    //     return redirect()->route('kue.index')->with('success', 'Kue updated successfully');
    // }

    // public function destroy(Kue $kue)
    // {
    //     // menghapus data kue
    //     $kue->delete();

    //     return redirect()->route('kue.index')->with('success', 'Kue deleted successfully');
    // }
