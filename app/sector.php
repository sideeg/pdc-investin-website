<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sector extends Model
{
    protected $table = 'sector';
    protected $guarded = [];


    protected $appends = ['icon_full_path','background_image_full_path','image1_full_path'
    ,'image2_full_path','image3_full_path'];

    
    protected $fillable = [

        'sector_name_en',"sector_name_ar", 'icon','background_image',
         'text_en',"text_ar","image1","image2","image3","Brief_en","Brief_ar",'intro_en','intro_ar'
    ];

    public function getIconFullPathAttribute()
	{
		return isset($this->attributes['icon']) ?  '/images/' . $this->attributes['icon'] : null;
    }

    public function getImage1FullPathAttribute()
	{
		return isset($this->attributes['image1']) ?  '/images/' . $this->attributes['image1'] : null;
    }

    public function getImage2FullPathAttribute()
	{
		return isset($this->attributes['image2']) ?  '/images/' . $this->attributes['image2'] : null;
    }

    public function getImage3FullPathAttribute()
	{
		return isset($this->attributes['image3']) ?  '/images/' . $this->attributes['image3'] : null;
    }

    public function getBackgroundImageFullPathAttribute()
	{
		return isset($this->attributes['background_image']) ?  '/images/' . $this->attributes['background_image'] : null;
    }
}
