<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
    	'title', 'description', 'title_nepali', 'description_nepali'
    ];




    /**
    * To get the short description of event from model
    *
    **/
    public function shortDescription()
    {
    	return substr($this->description, 0, 40) . '...';
    }

    /**
    * One to many relationship with Images
    *
    **/
    public function images()
    {
    	return $this->hasMany('App\Gallery');
    }
}
