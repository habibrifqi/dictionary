<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dtl_prc_indo extends Model
{
    use HasFactory;

    protected $table = 'dtl_prc_indo';

    protected $fillable = [
        'kamus_id',
        'arti_indo',
    ];

    protected $guarded = [];
}
