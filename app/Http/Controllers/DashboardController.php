<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\kategori;
use App\Models\suplier;
use App\Models\pembeli;

class DashboardController extends Controller
{
    public function index(){
        $barang = Barang::all();
        $kategori = Kategori::all();
        $suplier = Suplier::all();
        $pembeli = Pembeli::all();
        
        return view('home', compact('barang', 'suplier', 'kategori','pembeli'));
}
}