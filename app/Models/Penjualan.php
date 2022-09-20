<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';

    protected $guarded =[];

    public function barang(){
        return $this->belongsTo(Barang::class);
    }

    public function pembeli(){
        return $this->belongsTo(Pembeli::class);
    }
}
