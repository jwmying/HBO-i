<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainDescriptionTable extends Migration {

	public function up()
	{
		Schema::create('domain_description', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('image_name', 255)->default('standard_image.jpg');
			$table->text('link')->nullable();
			$table->smallInteger('type')->default('0');
			$table->text('description')->nullable();
			$table->enum('target_audience', ['students', 'teachers', 'members']);
			$table->string('slug', 255);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('domain_description');
	}
}