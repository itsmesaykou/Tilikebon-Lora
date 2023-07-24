<?php

namespace App\Http\Controllers;

use App\Models\Suhu;
use App\Models\User;
use App\Models\Cahaya;
use App\Models\Kelembapan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('index', []);
    }


    public function register()
    {
        return view('register', []);
    }

    public function login()
    {
        return view('login', []);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $data1 = Kelembapan::latestFirst()->first();
        $data2 = Suhu::latestFirst()->first();
        $data3 = Cahaya::latestFirst()->first();
        return view('auth.dashboard', [
            "data1" => $data1,
            "data2" => $data2,
            "data3" => $data3,
        ]);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register_action(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'username' => 'required|unique:user|min:3|max:20|',
            'password' => 'required|max:255',
            'password_confirm' => 'required|same:password'
        ]);

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password) 
        ]);
        return redirect('/login')->with('success', 'Register berhasil, silakan login!');
    }

    public function login_action(Request $request)
    {
        
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'Berhasil Login,');
        } else {
            return back()->with('errors', 'Username atau Password salah!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function password(Request $request) 
    {
        return view('auth.password', [

        ]);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:3|confirmed',
        ]);
        $user = Auth::user();
        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);
            return redirect()->route('home')->with('password', 'Password changed successfully.');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
