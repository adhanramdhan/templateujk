<?php

namespace App\Http\Controllers;

use App\Models\level;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = User::with('levels')->get();
        return view('user.index' , compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $levels = level::all();
        return view('user.create' , compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('user.index')->with('success', 'Data Berhasil Ditambahkan');
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
        $levels = level::all();
        $edit = User::find($id);
        return view('user.edit' , compact('edit' , 'levels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        User::where('id', $id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'id_level' => $request->id_level,
            'password' =>  password_hash($request->password, PASSWORD_DEFAULT),
            // 'password' => $request->password
        ]);
        return redirect()->route('user.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus');
    }
}
