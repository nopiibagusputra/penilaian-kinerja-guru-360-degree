<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespondenModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kode_respondensi';
    protected $table = 'kode_respondensi';
    
    protected $fillable = [
        'nama_respondensi',
    ];

    public $timestamps = false;
}
