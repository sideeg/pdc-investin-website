<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shares extends Model
{
    protected $table = 'shares_order';

    protected $fillable = [

        'customer_id', 'shares_num', 'session_id',"created_at"
    ];

}
