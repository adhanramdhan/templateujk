<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\detail_penjualan;
use App\Models\penjualan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

    public function showTrx(Request $request)
{
    $date = now()->format('Ymd');
    $members = User::all();
    $transactionCode = $this->GCTrx();
    $barang = Barang::where('qty', '>', 0)->get();
    return view('trx.transaksi', compact('members', 'transactionCode', 'barang', 'date'));
}

    public function penjualan()
    {
        
        $datas = penjualan::with(['usertrxname' , 'dls'])->get();
        return view('trx.penjualan' , compact('datas'));
    }
    public function penjualanstore(Request $request)
    {
        // Simpan data ke tabel penjualan


        $penjualan = Penjualan::create([
            'kode_transaksi' => $request->kode_transaksi,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'id_user' => $request->id_user,
        ]);

        foreach ($request->id_barang as $index => $id_barang) {
            $barang = Barang::find($id_barang);
            $qty = $request->qty[$index];

            // Mengurangi stok barang
            $barang->kurangiStok($qty);

            detail_penjualan::create([
                'id_penjualan' => $penjualan->id,
                'id_barang' => $id_barang,
                'harga' => $request->harga[$index],
                'qty' => $qty,
                'total_harga' => $request->harga[$index] * $qty,
                'jumlah' => $request->jumlah,
                'nominal_bayar' => $request->nominal_bayar,
                'kembalian' => $request->kembalian,
            ]);
        }
        return redirect()->to('penjualan')->with('success', 'Penjualab created successfully!');
    }
    private function GCTrx()
    {
        date_default_timezone_set("Asia/Jakarta");
        $userId = Auth::id();
        $date = now()->format('Ymd');
        $time = now()->format('His');
        return 'TRX-' . $date . '-' . $time . '-' . $userId;
    }
}
