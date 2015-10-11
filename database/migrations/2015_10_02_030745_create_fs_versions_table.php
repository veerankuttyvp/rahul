<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFsVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_versions', function(Blueprint $table) {
            //
            $table->increments('fs_version_id');
            $table->integer('fs_id')->unsigned()->nullable();
            $table->foreign('fs_id')->references('fs_id')->on('fs')->onDelete('cascade');
            $table->double('version', 11, 11);
            $table->string('file_path');
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
        Schema::drop('fs_versions');
    }
}
