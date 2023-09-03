<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letters extends Model
{
    use HasFactory;

    protected $fillable = [
        'confidential', 'baf_head','maintanence','supply','dhaka_canton'
    ];
}
