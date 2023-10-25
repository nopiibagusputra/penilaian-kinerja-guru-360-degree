<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kelas';
    protected $table = 'kelas';
    
    protected $fillable = [
        'nama_kelas',
    ];

    public $timestamps = false;
}
