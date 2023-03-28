<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'movie_id',
        'state'
    ];

    public static $rules = [
        'code'    => 'required',
        'movie_id'   => 'required',
        'state'     => 'required'
    ];

    public function Movies()
    {
        return $this->belongsTo('App\Models\Movie','movie_id');
    }
}
