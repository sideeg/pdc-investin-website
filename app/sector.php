<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sector extends Model
{
    protected $table = 'sector';
    protected $guarded = [];


    protected $appends = ['icon_full_path'];

    
    protected $fillable = [

        'sector_name_en',"sector_name_ar", 'icon',
         'text_en',"text_ar","image1","image2","image3","Brief_en","Brief_ar"
    ];

    public function getIconFullPathAttribute()
	{
		return isset($this->attributes['icon']) ?  '/images/' . $this->attributes['icon'] : null;
    }
}
