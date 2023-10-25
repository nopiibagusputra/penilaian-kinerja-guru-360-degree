<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_mapel';
    protected $table = 'mapel';
    
    protected $fillable = [
        'nama_mapel',
    ];

    public $timestamps = false;
}
