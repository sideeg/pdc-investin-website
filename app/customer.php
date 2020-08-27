<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    
    protected $fillable = [

        'name', 'phone_number', 'address',"email","password","agent_id","num_of_shares"
    ];

    public function agent()
    {
        return $this->belongsTo('App\agent');
    }
}
