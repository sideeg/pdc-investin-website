<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blog';
    protected $guarded = [];


    
    protected $appends = ['image_full_path'];
    
    protected $fillable = [

         'blog_name_en','blog_name_ar',"Brief_en",'Brief_ar',"text_en",'text_ar','intro_en','intro_ar'
         ,"created_at"
    ];


	public function getImageFullPathAttribute()
	{
		return isset($this->attributes['image']) ?  '/images/' . $this->attributes['image'] : null;
    }
}
