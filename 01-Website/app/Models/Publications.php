<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publications extends Model {

	protected $table = 'publications';
	public $timestamps = true;

	use SoftDeletes, HasFactory;

	protected $dates = ['deleted_at'];

}
