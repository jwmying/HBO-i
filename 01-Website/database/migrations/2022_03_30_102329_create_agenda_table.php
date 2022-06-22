<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration {

	public function up()
	{
		Schema::create('agenda', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('title', 255);
			$table->string('image_name', 255)->default('standard_image.jpg');
			$table->text('description');
			$table->string('location', 255);
			$table->dateTime('start_time');
			$table->dateTime('end_time');
			$table->string('organisator', 255);
			$table->text('link')->nullable();
			$table->string('slug', 255);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('agenda');
	}
}