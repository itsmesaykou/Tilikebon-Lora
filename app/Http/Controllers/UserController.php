<?php

namespace App\Http\Controllers;


use App\Models\Suhu;
use App\Models\User;
use App\Models\Cahaya;
use App\Models\Kelembapan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $data = User::all();
        return view('auth.user', [
            'data' => $data
        ]);
    
    }

    public function profile(Request $request)
    {
        return view('auth.profile');
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function view(User $user, $id)
    {
        $data = User::findorfail($id);
        return view('auth.viewP', [
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, $id)
    {
        $data = User::findorfail($id);
        $data->delete();
        return redirect('/user')->with('success', 'Berhasil menghapus user');
    }
}
