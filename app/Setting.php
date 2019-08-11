<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable = [
    	'id', 'site_name','site_name_nepali', 'email', 'phone_number','phone_number_nepali', 'emergency_number','emergency_number_nepali',
    	'address', 'address_nepali', 'header_logo_center', 'header_logo_right', 'top_nav_color',
    	'main_nav_color'
    ];
}
