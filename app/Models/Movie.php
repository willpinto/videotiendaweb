<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'duration',
        'quantity',
        'description',
        'genre_id'
    ];

    public static $rules = [
        'code'   => 'required',
        'title'  => 'required',
        'genre_id'   => 'required'
    ];

    public function Genres()
    {
        return $this->belongsTo('App\Models\Genre','genre_id');
    }
}
