<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_values', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('period');
            $table->string('value');
            $table->integer('district_id')->unsigned();
            $table->integer('metadata_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('metadata_id')->references('id')->on('metadata');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('district_id')->references('id')->on('districts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_values');
    }
}
