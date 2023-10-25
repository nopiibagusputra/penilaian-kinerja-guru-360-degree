<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianRespondensi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_penilaian_resndensi';
    protected $table = 'penilaian_respondensi';
    
    protected $fillable = [
        'id_guru',
        'id_responden',
        'id_kode_respondensi',
        'id_komponen',
        'id_pernyataan',
        'skor_penilaian',
    ];

    public $timestamps = false;
}
