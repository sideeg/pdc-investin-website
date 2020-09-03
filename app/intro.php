<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class intro extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'intro';
    protected $guarded = [];


    protected $appends = ['icon_full_path'];
    
    protected $fillable = [

        'section_name_en','section_name_ar', 'icon', 'intro_en','intro_ar'
    ];


	public function getIconFullPathAttribute()
	{
		return isset($this->attributes['icon']) ?  '/images/' . $this->attributes['icon'] : null;
    }
}
