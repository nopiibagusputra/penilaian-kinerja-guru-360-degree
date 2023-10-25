<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeRespondensi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kode_respondensi';
    protected $table = 'kode_respondensi';
    
    protected $fillable = [
        'kode_respondensi',
    ];

    public $timestamps = false;
}
