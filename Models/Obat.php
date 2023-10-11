<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    public function pesanan_detail()
    {
        return $this->hasMany('App\Models\PesananDetail', 'obat_id', 'id');
    }
}
