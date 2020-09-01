<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class success_stories extends Model
{
    protected $table = 'success_stories';
    protected $guarded = [];


    
    protected $appends = ['icon_full_path'];
    
    protected $fillable = [

         'icon','name_en','name_ar','text_en','text_ar','created_at','facbook_url'
    ];


	public function getIconFullPathAttribute()
	{
		return isset($this->attributes['icon']) ?  '/images/' . $this->attributes['icon'] : null;
    }
}
