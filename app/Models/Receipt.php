<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'total'
    ];

    public static $rules = [
        'code'   => 'required',
        'name'   => 'required',
        'total'  => 'required'
    ];

    public function Rentals()
    {
        return $this->hasMany('App\Models\Rental');
    }
}
