<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionFieldValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_field_values', function (Blueprint $table) {
            $table->increments('section_field_value_id');
            $table->integer('fs_version_id')->unsigned()->nullable();
             $table->foreign('fs_version_id')->references('fs_version_id')->on('fs_versions')->onDelete('cascade');
             $table->string('document_title');
             $table->string('document_sub_title');
             $table->string('dev_company_name');
             $table->string('dev_company_logo');
             $table->string('client_company_name');
             $table->string('client_company_logo');
             $table->text('objective');
             $table->tinyInteger('ios');
             $table->string('lowest_ios_version');
             $table->string('resolutions');
             $table->enum('ios_oriantation', ['Portraite', 'Landscape']);
              $table->tinyInteger('android');
               $table->tinyInteger('windows');
               $table->string('other_platform');
               $table->tinyInteger('ie');
               $table->string('ie_lowest_version');
               $table->tinyInteger('chrome');
               $table->tinyInteger('safari');
               $table->enum('monetization_model', ['Free', 'Paid','Subscription']);
               $table->text('monetization_description');
               $table->tinyInteger('english');
               $table->string('other_langauge');
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
        Schema::drop('section_field_values');
    }
}
