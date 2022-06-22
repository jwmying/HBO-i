<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LectureSites extends Model {

	protected $table = 'lecture_sites';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}
