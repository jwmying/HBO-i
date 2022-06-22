<?php

namespace App\Models;

use App\Models\NewsArticle;
use App\Models\NewsFilters;
use Illuminate\Database\Eloquent\Model;

class NewsHasFilter extends Model
{
	protected $table = 'news_has_filters';

    public function article()
    {
        return $this->belongsTo(NewsArticle::class);
    }

    public function filter()
    {
        return $this->belongsTo(NewsFilters::class);
    }
}
