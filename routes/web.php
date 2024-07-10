<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;









Route::get('/', function () {
    return view('welcome');
});


Route::resource('/', LoginController::class);
Route::post('actionLogin' , [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::post('actionLogout' , [LoginController::class, 'actionLogout'])->name('actionLogout');
route::resource('dashboard', DashboardController::class);
Route::resource('user', UserController::class);
Route::resource('barang', BarangController::class);
Route::resource('detail_penjualan', DetailPenjualanController::class);
Route::resource('penjualan', PenjualanController::class);
Route::resource('KategoriBarang' , KategoriBarangController::class);
Route::resource('level' , LevelController::class);
Route::resource('laporan' , LaporanController::class);

Route::resource('transaction' , TransaksiController::class);
Route::get('showTrx' , [TransaksiController::class, 'showTrx'])->name('showTrx');
Route::get('penjualan' , [TransaksiController::class, 'penjualan'])->name('trx.penjualan');
Route::post('penjualanstore' , [TransaksiController::class, 'penjualanstore'])->name('penjualanstore');

