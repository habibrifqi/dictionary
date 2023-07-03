<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dtl_indo_prc extends Model
{
    use HasFactory;

    protected $table = 'dtl_indo_prancis';

    protected $fillable = [
        'kamus_id',
        'arti_prc',
        'DIP_contoh_indo',
        'DIP_arti_prancis',
    ];

    protected $guarded = [];
}
