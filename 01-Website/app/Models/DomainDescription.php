<?php

namespace App\Models;

use App\Traits\Enums;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DomainDescription extends Model {

    use HasFactory;
	use SoftDeletes;
	use Sluggable;
	use Enums;

	protected $table = 'domain_description';
    protected $dates = ['deleted_at'];
    
    protected $enumTargetAudiences = [
        'students',
        'teachers',
        'members'
    ];

    public $timestamps = true;

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
