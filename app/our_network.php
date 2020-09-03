<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class our_network extends Model
{
    protected $table = 'our_network';
    protected $guarded = [];


    
    protected $appends = ['logo_full_path'];
    
    protected $fillable = [

         'logo','intro_en','intro_ar'
    ];


	public function getLogoFullPathAttribute()
	{
		return isset($this->attributes['logo']) ?  '/images/' . $this->attributes['logo'] : null;
    }
}
