<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_fields', function (Blueprint $table) {
            $table->increments('feature_field_id');
            $table->integer('feature_id')->unsigned()->nullable();
             $table->foreign('feature_id')->references('feature_id')->on('features');
             $table->string('field_name');
             $table->enum('type', ['Text', 'Pass','Rsd','Check','Sel','Hidd']);
             $table->string('default');
             $table->tinyInteger('is_mandatory');
             $table->string('validation_message');
             $table->string('action');
            // $table->timestamps();
            $table->integer('order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('feature_fields');
    }
}
