<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blog';
    protected $guarded = [];


    
    protected $appends = ['image_full_path'];
    
    protected $fillable = [

         'blog_name',"Brief","text","created_at"
    ];


	public function getImageFullPathAttribute()
	{
		return isset($this->attributes['image']) ?  '/images/' . $this->attributes['image'] : null;
    }
}
