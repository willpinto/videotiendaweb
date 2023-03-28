<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
       'document',
       'names',
       'surnames',
       'address',
       'celphone',
       'email',
       'birth_date',
       'gender'
    ];

    public static $rules = [
        'document'  => 'required',
        'names'  => 'required',
        'email'   => 'required'
    ];

    public function Rentals()
    {
        return $this->hasMany('App\Models\Rental');
    }
}
