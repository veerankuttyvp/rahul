<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_relation', function (Blueprint $table) {
            $table->increments('feature_relation_id');
            $table->integer('parent_feature_id')->unsigned()->nullable();
             $table->foreign('parent_feature_id')->references('feature_id')->on('features');
             $table->integer('child_feature_id')->unsigned()->nullable();
             $table->foreign('child_feature_id')->references('feature_id')->on('features');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('feature_relation');
    }
}
