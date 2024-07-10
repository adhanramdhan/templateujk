<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\kategori_barang;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Barang::with('kategori')->get();
        
        if ($request->filled('tanggal')) {
            $query->where('created_at', $request->jurusan);
        }

        if ($request->filled('kategori')) {
            $query->where('nama_barang', 'like', '%' . $request->search . '%');
        }

        $datas = $query->all();
        $tahun = Barang::where('created_at')->get();

    
        // $datas = Barang::with('kategori')->get();
        $cat = kategori_barang::all();
        return view('trx.laporan' , compact('cat' , 'datas' , 'tahun'));
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
