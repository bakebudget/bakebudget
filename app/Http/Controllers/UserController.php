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

  //  public function tambah(UserRequest $request): RedirectResponse
   // {
  //      $data = $request->validated();
    //    $user = new User($data);
    //    $user->password = Hash::make($data['password']);
    //    $user->save();

   //     return redirect()->route('user')->with('success', 'User berhasil dibuat');
   // }

    public function detail(Request $request)
    {
        $id = $request->id;
        $data = [
            'user' => User::all()
        ];

        return view('user.detail', $data);
    }
}
