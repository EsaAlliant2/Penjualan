<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pembeli;

class pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembeli';

    protected $guarded =[];

    public function pembeli(){
        return $this->belongsToMany(Pembeli::class);
}
}