<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index()
    {
        return view('session.index');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('cart');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

        // dd($request);
        // Session::flash('email', $request->email);
        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required'
        // ],[
        //     'email.required' => 'wajib diisi',
        //     'password.required' => 'wajib diisi'
        // ]);

        // $infologin = [
        //     'email' => $request->email,
        //     'password' => $request->password

        // ];
        // dd($infologin);
        // if(Auth::attempt($infologin)){
        //     $request->session()->regenerate();

        //     return redirect()->intended('Cart');
        // }else{
        //     return back()->withErrors([
        //         'email' => 'ada yg salah',
        //     ])->onlyInput('email');

        // }

    }
    public function logout()
    {
        Auth::logout();
        return redirect('session')->with('success', 'Berhasil logout');
    }
    public function register(){
        return view('session.register');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ],[
            'name.required' => 'nama wajib diisi',
            'email.required' => 'email wajib diisi',
            'password.required' => 'password wajib diisi'
        ]);

        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ];
        User::create($user);
        return redirect('/session');
    }
}
