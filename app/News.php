<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = [

    	'title', 'image', 'description'
    ];

     /**
    * To get the short description of event from model
    *
    **/
    public function shortDescription($length = 40)
    {
    	return substr($this->description, 0, $length) . '...';
    }
}
