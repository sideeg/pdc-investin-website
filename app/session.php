<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class session extends Model
{
    protected $table = 'session';
    protected $guarded = [];

    protected $appends = ['Remainingshares','TakenSharesPresent'];



    
    protected $fillable = [

        'session_name', 'start_date', 'end_date',"total_num_of_shares","num_of_taken_share","sector_id"
    ];

    public function sector()
    {
        return $this->belongsTo('App\sector');
    }

    public function getRemainingsharesAttribute()
	{
        return  $this->total_num_of_shares - $this->num_of_taken_share;
       
    }

    public function getTakenSharesPresentAttribute()
	{
        return  ($this->num_of_taken_share / $this->total_num_of_shares)*100;
    }



}
