<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class WebConfig extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table    = 'web_config';
 
    protected $fillable = [
        'keyword', 'type', 'content', 'published_at', 'unpublished_at'
    ];

    protected $casts 	= ['content' => 'array'];

    public function scopeActive($q, Carbon $date){
    	return $q->where('published_at', '<=', $date)->where(function($q2)use($date){
    		$q2->wherenull('unpublished_at')
    		->orwhere('unpublished_at', '>=', $date);
    	});
    }
}
