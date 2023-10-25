<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiRespondensi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_nilai_respondensi';
    protected $table = 'nilai_respondensi';
    
    protected $fillable = [
        'id_kode_respondensi',
        'id_guru',
        'jumlah_skor_respondensi',
        'nilai_respondensi',
    ];

    public $timestamps = false;
}
