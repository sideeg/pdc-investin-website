<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $table = 'message';
    protected $guarded = [];


    
    protected $fillable = [

        'name', 'email',"subject", 'message',"created_at","updated_at"
    ];
}
