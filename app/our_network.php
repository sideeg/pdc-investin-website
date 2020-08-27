<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class our_network extends Model
{
    protected $table = 'our_network';
    protected $guarded = [];


    
    protected $appends = ['photo_full_path'];
    
    protected $fillable = [

         'logo'
    ];


	public function getPhotoFullPathAttribute()
	{
		return isset($this->attributes['logo']) ?  '/images/' . $this->attributes['logo'] : null;
    }
}
