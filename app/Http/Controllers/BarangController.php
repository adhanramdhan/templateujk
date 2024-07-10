<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\kategori_barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Barang::with('kategori')->get();
        // return $datas;
        $kategori = kategori_barang::orderBy('id' , 'desc')->get();
        return view('barang.index', compact('kategori' , 'datas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $cc = kategori_barang::orderBy('id' , 'desc')->get();
        return view('barang.create' , compact('cc'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create($request->all()); 
   

        // Barang::create([
           
        //     'id_category' => $request->id_category,
        //     'nama_barang' => $request->nama_barang,
        //     'stock' => $request->stock,
        //     'harga' => $request->harga,
        //     'satuan' => $request->satuan,
        // ]); 

        return redirect()->to('barang')->with('success' , 'Tamvag Berhasil');
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
        $barang = Barang::findOrFail($id);
        $cc = kategori_barang::all();
        $edit = Barang::find($id);
        return view('barang.edit' , compact('edit' , 'cc' , 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Auth::user()->id_level == 1) {

        
        Barang::where('id' , $id)->update([
          
            'id_kategori' => $request->id_kategori,
            'nama_barang' => $request->nama_barang,
            'qty' => $request->qty,
            'harga' => $request->harga,
            'satuan' => $request->satuan,
        ]); 
        return redirect()->to('barang');
        } else {
            Barang::where('id' , $id)->update([
                'qty' => $request->qty,
               
            ]); 
            return redirect()->to('barang')->with('success', 'Tambah Data Berhasil');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            Barang::where('id', $id)->delete();
            return redirect()->to('barang')->with('massage', 'data berhasil dihapus');
        }
    }
}



// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         return view('barang.index');
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(Barang $barang)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Barang $barang)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, Barang $barang)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Barang $barang)
//     {
//         //
//     }
// }
