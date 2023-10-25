<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataResponden extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_data_responden';
    protected $table = 'data_responden';
    
    protected $fillable = [
        'id_penilai',
        'id_responden',
        'id_guru',
        'total_nilai',
    ];

    public $timestamps = false;
}
