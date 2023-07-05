<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contoh_katalain_indo extends Model
{
    use HasFactory;

    protected $table = 'contoh_katalain_indo';

    protected $fillable = [
        'katalain_indo_id',
        'kl_contoh_indo',
        'kl_arti_prc',
        'des_kl_contoh_indo',
        
    ];

    protected $guarded = [];
}
