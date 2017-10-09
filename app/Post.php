<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'featured_img', 'content', 'category_id'
    ];

    protected $dates = ['deleted_at'];

	public function category()
	{
		return $this->belongsTo('App\Category');
	}
}
