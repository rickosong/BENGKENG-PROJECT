<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bengkel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'namabengkel',
        'deskripsi',
        'alamat',
        'layananjasa',
        'phonenumber',
        'jenisbengkel_id',
        'status_id',
        'maps',
        'image',
        'views'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function JenisBengkel(){
        return $this->belongsTo(AllBengkel::class);
    }

    public function Status(){
        return $this->belongsTo(Status::class);
    }
}
