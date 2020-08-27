<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class success_stories extends Model
{
    protected $table = 'success_stories';
    protected $guarded = [];


    
    protected $appends = ['photo_full_path'];
    
    protected $fillable = [

         'icon','name','text','created_at'
    ];


	public function getPhotoFullPathAttribute()
	{
		return isset($this->attributes['photo']) ?  '/images/' . $this->attributes['photo'] : null;
    }
}
