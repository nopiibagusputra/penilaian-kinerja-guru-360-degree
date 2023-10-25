<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndikatorModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_indikator';
    protected $table = 'indikator';
    
    protected $fillable = [
        'id_kompetensi',
        'nama_indikator',
    ];

    public $timestamps = false;
}
