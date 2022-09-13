<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    KategoriController,
    BarangController,
    SuplierController,
    PembeliController,
    DashboardController,
    PembelianController
};
Route::get('/',[DashboardController::class,'index']);


Route :: resource('/barang',BarangController::class);
Route :: get('/barang/{id}/edit/',[BarangController::class,'edit']);
Route :: get('/barang/{id}/hapus/',[BarangController::class,'destroy']);

//route kategori
Route :: resource('/kategori',KategoriController::class);
Route :: get('/kategori/edit/{id}',[KategoriController::class,'edit']);
Route :: get('/kategori/hapus/{id}',[KategoriController::class,'destroy']);

Route :: resource('/pembeli',PembeliController::class);
Route :: get('/pembeli/{id}/edit',[PembeliController::class,'edit']);
Route :: get('/pembeli/{id}/hapus',[PembeliController::class,'destroy']);

Route :: resource('/pembelian',PembelianController::class);
Route :: get('/pembelian/{id}/edit',[PembelianController::class,'edit']);
Route :: get('/pembelian/{id}/hapus',[PembelianController::class,'destroy']);

Route::get('/penjualan', function () {
    return view('penjualan.index');
});

Route :: resource('/suplier',SuplierController::class);
Route :: get('/suplier/{id}/edit',[SuplierController::class,'edit']);
Route :: get('/suplier/{id}/hapus',[SuplierController::class,'destroy']);