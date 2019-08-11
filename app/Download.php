<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    //

    protected $fillable = [
    	'title', 'menu_id' , 'file', 'title_nepali'
    ];

    public function menu()
    {
		return $this->belongsTo('App\Menu');    	
    }
}
