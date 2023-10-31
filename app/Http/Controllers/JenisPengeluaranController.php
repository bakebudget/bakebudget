<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JenisPengeluaran;
use App\Models\User;
use Illuminate\Http\Request;
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

}
