<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kue;

class KueController extends Controller
{
    public function index()
    {
        $kue = Kue::all(); // mengambil data kue
        return view('kue.index', ['kue' => $kue]);
        // return view('kue.index', $kue);
    }

    public function create()
    {
        return view('kue.add');
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
}
