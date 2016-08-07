<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetadataCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metadata_category', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('metadata_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('metadata_id')->references('id')->on('metadata');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('metadata_category');
    }
}
