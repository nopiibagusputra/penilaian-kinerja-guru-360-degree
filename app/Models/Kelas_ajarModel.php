<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas_ajarModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kelas_ajar';
    protected $table = 'kelas_ajar';
    
    protected $fillable = [
        'id_kelas',
        'id_guru',
    ];

    public $timestamps = false;
}
