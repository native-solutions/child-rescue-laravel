<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use DB;

class Menu extends Model
{
	use HasSlug;
    //
    /*
    * Mass assignment 
    *
    */
    protected $fillable = [
    	'title', 'parent_id', 'slug', 'title_nepali'
    ];


    public function getParentName(){
    	if($this->parent_id){
    		$parent_menu = DB::table('menus')->where('id', $this->parent_id)->first();
    		return $parent_menu->title;
    	}
    	return '';
    }



      /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /* 
    * Check if this menu has child menu or not
    *
    */
    public function hasSubmenu()
    {
    	if(\App\Menu::where('parent_id', $this->id)->first()){
    		return true;
    	}	
    	return false;
    }

    /*
    *return submenus
    */
    public function submenus()
    {
    	return \App\Menu::where('parent_id', $this->id)->get();
    }

    /*
    * get all download files for this menu
    *
    */
    public function files()
    {
    	return $this->hasMany('App\Download');
    }
}
