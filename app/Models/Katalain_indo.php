<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalain_indo extends Model
{
    use HasFactory;

    protected $table = 'katalain_indo';

    protected $fillable = [
        'kamus_id',
        'kl_indo',
        'des_kl_indo',
        
    ];

    protected $guarded = [];
}
