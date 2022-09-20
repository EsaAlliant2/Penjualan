<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Suplier;
use App\Models\Kategori;
use App\Models\Pembeli;
use App\Models\Pembelian;
use App\Models\Penjualan;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    //ini jjika kita menggunakan eloquent ORM
    protected $guarded =[];

    public function suplier(){
        return $this->belongsTo(Suplier::class);
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function pembeli(){
        return $this->belongsTo(Pembeli::class);
    }

    public function pembelian(){
        return $this->belongsTo(Pembelian::class);
    }

    public function penjualan(){
        return $this->belongsTo(Penjualan::class);
    }
}
