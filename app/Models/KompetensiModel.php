<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KompetensiModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kompetensi';
    protected $table = 'kode_kompetensi';
    
    protected $fillable = [
        'nama_kompetensi',
    ];

    public $timestamps = false;
}
