<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about_us extends Model
{
    protected $table = 'about_us';
    protected $guarded = [];


    
    protected $fillable = [

        'date', 'action_en','action_ar', 'text_en','text_ar','intro_ar','intro_en'
    ];


}
