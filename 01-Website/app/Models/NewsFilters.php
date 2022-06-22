<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsFilters extends Model
{
	use SoftDeletes, HasFactory;

	protected $table = 'news_filters';
	protected $dates = ['deleted_at'];
	protected $fillable = ['name'];

	public $timestamps = true;

	public function articles()
	{
		return $this->belongsToMany(NewsArticle::class, 'news_has_filters', 'news_filters_id', 'news_id');
	}
}
