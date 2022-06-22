<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration {

	public function up()
	{
		Schema::create('publications', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('image_name', 255)->default('standard_image.jpg');
			$table->string('file_name', 255);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('publications');
	}
}