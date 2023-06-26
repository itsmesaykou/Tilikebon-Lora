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

        $data1 = Kelembapan::latestFirst()->first();
        $data2 = Suhu::latestFirst()->first();
        $data3 = Cahaya::latestFirst()->first();
        $data = User::all();
        return view('tables', [
            'data' => $data,
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3
        ]);
    
    }

    public function profile()
    {
        $data = User::all();
        return view('profile', [
            'data' => $data
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        return redirect('/dashboard/tables')->with('success', 'Berhasil menghapus user');
    }
}
