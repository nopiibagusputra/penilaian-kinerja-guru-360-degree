<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkorkompetensiModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_skor_kompetensi';
    protected $table = 'skor_kompetensi';
    
    protected $fillable = [
        'id_guru',
        'id_indikator',
        'id_kompetensi',
        'skor_kompetensi',
    ];

    public $timestamps = false;
}
