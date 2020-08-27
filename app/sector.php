<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sector extends Model
{
    protected $table = 'sector';
    protected $guarded = [];


    protected $appends = ['icon_full_path'];

    
    protected $fillable = [

        'sector_name', 'icon', 'text',"image1","image2","image3","Brief"
    ];

    public function getIconFullPathAttribute()
	{
		return isset($this->attributes['icon']) ?  '/images/' . $this->attributes['icon'] : null;
    }
}
