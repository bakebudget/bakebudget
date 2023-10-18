<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;


/**
 * Undocumented class
 */
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
        // dd(Auth::attempt($akun));
        if (Auth::attempt($akun)) {
            // dd($akun);
            $request->session()->regenerate();
            if (Auth::user()->level == 'admin'):
                return redirect()->to('/');
            else:
                return redirect()->to('/');
            endif;
        }
        return 'akun yang anda masukkan salah';
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
