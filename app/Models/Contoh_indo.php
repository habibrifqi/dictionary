<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contoh_indo extends Model
{
    use HasFactory;

    protected $table = 'contoh_indo';

    protected $fillable = [
        'dtl_indo_prc_id',
        'contoh_indo',
        'arti_prc',
        
    ];

    protected $guarded = [];
}
