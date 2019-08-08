<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $fillable = [
    	'caption', 'image', 'event_id'
    ];

    public function event()
    {
    	return $this->belongsTo('App\Event');
    }
}
