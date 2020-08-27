<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class share_order extends Model
{
    protected $table = 'shares_order';

    protected $fillable = [

        'name', 'address', 'session_id',"phone_number","num_of_taken_share","created_at"
    ];
}
