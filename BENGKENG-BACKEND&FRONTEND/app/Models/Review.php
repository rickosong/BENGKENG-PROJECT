<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bengkel_id',
        'rating_id',
        'review',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Bengkel(){
        return $this->belongsTo(Bengkel::class);
    }

    public function Rating(){
        return $this->belongsTo(AllRating::class);
    }
}
