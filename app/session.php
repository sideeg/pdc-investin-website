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

        'session_name_ar','session_name_en', 'start_date','detials_ar','detials_en',
         'end_date',"total_num_of_shares","num_of_taken_share","sector_id"
    ];

    public function sector()
    {
        return $this->belongsTo('App\sector');
    }

    public function getRemainingsharesAttribute()
	{
        return $this->total_num_of_shares <  $this->num_of_taken_share ?  "0"
        :   $this->total_num_of_shares - $this->num_of_taken_share;
       
    }

    public function setRemainingsharesAttribute($value)
	{
        $this->attributes['Remainingshares'] = $value ;
       
       
    }

    public function getTakenSharesPresentAttribute()
	{
        return $this->num_of_taken_share >= $this->total_num_of_shares ?  "100" :
          number_format(($this->num_of_taken_share / $this->total_num_of_shares)*100,2);
    }



}
