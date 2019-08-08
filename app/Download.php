<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    //

    protected $fillable = [
    	'title', 'menu_id' , 'file'
    ];

    public function menu()
    {
		return $this->belongsTo('App\Menu');    	
    }
}
