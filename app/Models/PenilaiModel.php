<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaiModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_penilai';
    protected $table = 'penilai';
    
    protected $fillable = [
        'id_guru',
        'id_guru_penilai',
        'nomor_sk_penugasan_penilai',
        'tanggal_sk_penilai',
        'tanggal_berlaku_sk',
        'tahun_penilaian',
        'status_formatif',
        'status_sumatif',
        'tanggal_penilaian',
        'periode_penilaian_awal',
        'periode_penilaian_akhir',
    ];

    public $timestamps = false;
}
