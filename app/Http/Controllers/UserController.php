<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
            return redirect('/user')->with('success', 'Data User baru berhasil ditambah');
        else:
            return redirect('/user/tambah')->with('error', 'Data User baru Gagal ditambah');
        endif;
    endif;
}

public function update(Request $request){
    $data = $request->validate([
        'username' => 'required',
        'level' => 'required',
        'password' => 'required',
        'foto' => 'mimes:png,jpg,jpeg,csv,txt,pdf',
    ]);

    $file = $request->file('foto');
    $oldfile = $request->file('oldfile');
    $filename = '';

    if($file){
        $filename = $file;
    }
    if($file !== $oldfile){
        $filename = time() . '_' . $file->getClientOriginalName();
    }

    $data['foto'] = $filename;
    $update = User::query()->find($request->id);

    if($oldfile){
        Storage::disk('public')->delete($oldfile);
    }
    
    if ($update->fill($data)->save()) {
        if($filename){
        $file->storePubliclyAs('', $filename, 'public');
    }
        return redirect()->to('/user')->with('success', "Data User berhasil diupdate");
    } else
        return redirect()->back()->with('error', "Data User gagal diupdate");
}


    public function detail(Request $request)
    {
        $id = $request->id;
        $data = [
            'user' => User::all()
        ];

        return view('user.detail', $data);
    }

    public function hapus(User $user, Request $request)
{
    $curr_user = $user->newQuery()->find($request->id);
    if (!empty($curr_user->file) && Storage::disk('public')->exists($curr_user->file)) {
        Storage::disk('public')->delete($curr_user->file);
    }
    if ($curr_user->delete()) {
        return redirect()->to('/user')->with('success','Data User berhasil dihapus');
    } else
        return redirect()->to('/user')->with('error','Data User gagal dihapus');
}

public function edit(Request $request)
{
    $data = [
        'user' => User::find($request->id)
    ];
    
    return view('user.edit', $data);
}

}



