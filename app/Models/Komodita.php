<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komodita extends Model
{
    use HasFactory;
    protected $fillable = [
        'komoditas_kode',
        'komoditas_nama'
    ];

    public function getRouteKeyName()
    {
        return 'komoditas_kode';
    }
}
