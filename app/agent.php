<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agent extends Model
{
    protected $fillable = [

        'name', 'phone_number', 'address',"email","password"
    ];
}
