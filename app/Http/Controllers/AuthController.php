<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function proses_login(Request $request)
    {
        # code...
        request()->validate(
            [
                'username' => 'required',
                'password'=> 'required',
            ]);
            $kredensil = $request->only('username', 'password');

            if (Auth::attempt($kredensil)) {
                # code...
                $user = Auth::user();
                if ($user->role == 'admin') {
                    # code...
                    return redirect()->intended('admin');
                }elseif ($user->role == 'visitor') {
                    # code...
                    return redirect()->intended('visitor');
                }
                return redirect()->intended('/');
            }
            return redirect('login');
    }

    public function logout(Request $request)
    {
        # code...
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
