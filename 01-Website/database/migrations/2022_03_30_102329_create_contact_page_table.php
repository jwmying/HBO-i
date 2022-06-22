<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactPageTable extends Migration {

	public function up()
	{
		Schema::create('contact_page', function(Blueprint $table) {
			$table->increments('id');
			$table->string('street', 255);
			$table->string('number', 255);
			$table->string('zip_code', 255);
			$table->string('city', 255);
			$table->string('phone_number', 255);
			$table->string('fax', 255);
			$table->string('email', 255);
			$table->string('linkedin', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('contact_page');
	}
}