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


    protected $appends = ['photo_full_path'];
    
    protected $fillable = [

        'section_name', 'icon', 'text'
    ];


	public function getPhotoFullPathAttribute()
	{
		return isset($this->attributes['photo']) ?  '/images/' . $this->attributes['photo'] : null;
    }
}
