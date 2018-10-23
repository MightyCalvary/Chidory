<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class WebContent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table    = 'web_content';
 
    protected $fillable = [
        'keyword', 'type', 'category', 'caption', 'published_at', 'unpublished_at', 'gallery', 'description'
    ];

    protected $casts 	= ['gallery' => 'array', 'description' => 'array'];

    public function scopeActive($q, Carbon $date){
    	return $q->where('published_at', '<=', $date)->where(function($q2)use($date){
    		$q2->wherenull('unpublished_at')
    		->orwhere('unpublished_at', '>=', $date);
    	});
    }
}