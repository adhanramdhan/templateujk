<?php

namespace App\Http\Controllers;

use App\Models\kategori_barang;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = kategori_barang::all();
        return view('kategori.index' , compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        kategori_barang::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->to('KategoriBarang')->with('success', 'Data berhasil disimpan!');
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
        $edit = kategori_barang::find($id);
        return view('kategori.edit', compact('edit'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        kategori_barang::where('id', $id)->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->to('KategoriBarang')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        kategori_barang::where('id', $id)->delete();
        return redirect()->to('KategoriBarang')->with('success', 'Data berhasil dihapus!');
    }
}
