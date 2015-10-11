<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->increments('feature_id');
            $table->integer('section_id')->unsigned()->nullable();
             $table->foreign('section_id')->references('section_id')->on('sections')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('screens');
            $table->text('caption');
            $table->integer('order');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('features');
    }
}
