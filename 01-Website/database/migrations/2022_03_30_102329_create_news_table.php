<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration {

	public function up()
	{
		Schema::create('news', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('title', 255);
			$table->string('sub_title', 255);
			$table->string('image_name', 255)->default('standard_image.jpg');
			$table->text('description');
			$table->enum('status', ['draft', 'published']);
			$table->enum('target_audience', ['students', 'teachers', 'members']);
			$table->string('slug', 255);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('news');
	}
}