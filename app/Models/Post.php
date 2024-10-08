<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $casts = [
        'created_at'=>'datetime:d/m/Y',
    ];

    protected $fillable = [
            'title',
            'slug',
            'content',
            'visit',
            'positive_votes',
            'negative_votes',
    ];
}
