<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    //
    public function index(): View
    {
        $data = [
            'user' => User::all()
        ];

        return view('user.index', $data);
    }

    public function tambah()
    {
        $data = [
            'user' => User::all()
        ];
        
        return view('user.tambah', $data);
    }


   public function simpan(Request $request){
    $data = $request->validate([
        'username' => 'required',
        'level' => 'required',
        'password' => 'required',
        'foto' => 'mimes:png,jpg,jpeg,csv,txt,pdf',
    ]);


    if ($data):
        
        $file = $request->file('foto');
        $filename = '';

        if($file) {
        $filename = time() . '_' . $file->getClientOriginalName();
        }

        $data['foto'] = $filename;
        $dataInsert = User::query()->create($data);
        if ($dataInsert):
            if($file){
            $file->storePubliclyAs('', $filename, 'public');
            }
            return redirect('/user')->with('success', 'Data pembayaran baru berhasil ditambah');
        else:
            return redirect('/user/tambah')->with('error', 'Data pembayaran baru Gagal ditambah');
        endif;
    endif;
}


    public function detail(Request $request)
    {
        $id = $request->id;
        $data = [
            'user' => User::all()
        ];

        return view('user.detail', $data);
    }
}
