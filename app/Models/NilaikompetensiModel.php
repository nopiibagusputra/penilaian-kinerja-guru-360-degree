<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaikompetensiModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_nilai_kompetensi';
    protected $table = 'nilai_kompetensi';
    
    protected $fillable = [
        'id_guru',
        'id_kompetensi',
        'jumlah_skor_kompetensi',
        'nilai_kompetensi',
    ];

    public $timestamps = false;
}
