<?php

namespace App\Models;

use App\Traits\Enums;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class NewsArticle extends Model
{
	use HasFactory;
	use SoftDeletes;
	use Sluggable;
	use Enums;

	protected $table = 'news';
	protected $dates = ['deleted_at'];

	protected $enumTargetAudiences = [
        'students',
        'teachers',
        'members'
    ];

	public $timestamps = true;

	public function getFormattedDate()
	{
		return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d-m-Y H-i');
	}

	public function isDraft()
    {
		return $this->status == 'draft';
    }

	public function filters()
	{
		return $this->belongsToMany(NewsFilters::class, 'news_has_filters', 'news_id', 'news_filters_id');
	}

	/**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
