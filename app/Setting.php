<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable = [
    	'id', 'site_name', 'email', 'phone_number', 'emergency_number',
    	'address', 'header_logo_center', 'header_logo_right', 'top_nav_color',
    	'main_nav_color'
    ];
}
