<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name'
    ];

    public function Movies()
    {
            return $this->hasMany('App\Models\Movie');   
    }
}
