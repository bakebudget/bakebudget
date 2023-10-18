<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        //
        return view('login.form');
    }

    public function check(Request $request)
    {
        // dd($request->all());
        $akun = $request->validate(
            [
                'username' => ['required'],
                'password' => ['required']
            ]
        );
        // dd(User::attempt($akun));
        if (User::attempt($akun)) {
            // dd($akun);
            $request->session()->regenerate();
            if (User::user()->level == 'admin'):
                return redirect()->to('/');
            else:
                return redirect()->to('/');
            endif;
        }
        return 'akun yang anda masukkan salah';
    }
}
