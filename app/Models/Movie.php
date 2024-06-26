<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'unique_id',
        'release_year',
        'length',
        'language',
        'quantity',
        'category',
        'director',
        'main_actress',
        'main_actor',
        'description',
        'thumbnail',
    ];

}
