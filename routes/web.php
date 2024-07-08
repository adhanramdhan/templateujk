<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('/', LoginController::class);
Route::post('actionLogin' , [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::post('actionLogout' , [LoginController::class, 'actionLogout'])->name('actionLogout');
route::resource('dashboard', DashboardController::class);
