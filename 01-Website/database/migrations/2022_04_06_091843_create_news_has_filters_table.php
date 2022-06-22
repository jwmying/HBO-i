<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsHasFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('news_has_filters');
        Schema::create('news_has_filters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('news_id');
            $table->unsignedBigInteger('news_filters_id');

            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->foreign('news_filters_id')->references('id')->on('news_filters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_has_filters');
    }
}
