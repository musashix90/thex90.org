<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'featured_img', 'content', 'category_id', 'slug'
    ];

    protected $dates = ['deleted_at'];

	public function category()
	{
		return $this->belongsTo('App\Category');
	}
}
