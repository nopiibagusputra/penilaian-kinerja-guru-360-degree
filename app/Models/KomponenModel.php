<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomponenModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_komponen';
    protected $table = 'komponen_kuisioner';
    
    protected $fillable = [
        'nama_komponen',
    ];

    public $timestamps = false;
}
