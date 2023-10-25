<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PernyataanModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pernyataan';
    protected $table = 'pernyataan_kuisioner';
    
    protected $fillable = [
        'id_komponen',
        'nama_pernyataan',
    ];

    public $timestamps = false;
}
