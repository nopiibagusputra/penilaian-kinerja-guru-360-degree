<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_siswa';
    protected $table = 'siswa';
    
    protected $fillable = [
        'id_kelas',
        'nama_siswa',
    ];

    public $timestamps = false;
}
