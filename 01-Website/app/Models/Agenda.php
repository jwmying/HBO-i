<?php

namespace App\Models;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agenda extends Model {

	protected $table = 'agenda';
	public $timestamps = true;

	use SoftDeletes, HasFactory;
    use Sluggable;

	protected $dates = ['deleted_at'];

    public function getDateStartAttribute()
    {
        return Carbon::parse($this->start_time)->format('Y-m-d\TH:i');
    }

    public function getDateEndAttribute()
    {
        return Carbon::parse($this->end_time)->format('Y-m-d\TH:i');
    }

    public function getDateFormattedLocalized()
    {  
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->start_time)->locale('nl')->isoFormat('d MMMM YYYY');
    }

    public function getTime()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->start_time)->locale('nl')->format('d-m-Y H:m');
    }

    public function getClosing()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->end_time)->locale('nl')->format('d-m-Y H:m');
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
