<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
       'code',
       'date',
       'return_date',
       'value',
       'penalty',
       'client_id',
       'copy_id',
       'receipt_id'
    ];

    public static $rules = [
       'code'   => 'required',
       'date'  => 'required',
       'return_date'  => 'required',
       'penalty'     => 'required',
       'client_id'  => 'required'
    ];

    public function Clients()
    {
        return $this->belongsTo('App\Models\Client','client_id');
    }

    public function Receipts()
    {
        return $this->belongsTo('App\Models\Receipt','receipt_id');
    }

    public function Copies()
    {
        return $this->belongsTo('App\Models\Copy','copy_id');
    }
}
