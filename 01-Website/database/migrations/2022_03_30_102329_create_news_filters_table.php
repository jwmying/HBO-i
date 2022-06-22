<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsFiltersTable extends Migration {

	public function up()
	{
		Schema::create('news_filters', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('news_filters');
	}
}