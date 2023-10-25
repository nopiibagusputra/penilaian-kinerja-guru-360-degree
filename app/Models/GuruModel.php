<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_guru';
    protected $table = 'guru';
    
    protected $fillable = [
        'id_user',
        'id_mapel',
        'nama',
        'nip',
        'nomor_seri_karpeg',
        'nuptk',
        'tempat_lahir',
        'tanggal_lahir',
        'pangkat',
        'tmt_golongan',
        'tmt_guru',
        'tmt_sekolah',
        'pendidikan',
        'jk',
        'program_keahlian',
        'tanggal_sk',
        'status',
        'nomor_sk_penugasan',
    ];

    public $timestamps = false;
}
