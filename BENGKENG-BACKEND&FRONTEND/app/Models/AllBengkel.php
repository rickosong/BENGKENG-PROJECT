<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllBengkel extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_bengkel',
    ];
}
