<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLectureSitesTable extends Migration {

	public function up()
	{
		Schema::create('lecture_sites', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->text('link');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('lecture_sites');
	}
}