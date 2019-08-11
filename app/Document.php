<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	use HasSlug;
    //

    protected  $fillable = [
    	'title', 'slug', 'menu_id', 'content', 'title_nepali', 'content_nepali'
    ];


    public function menu()
    {
    	return $this->belongsTo('App\Menu');
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
}
