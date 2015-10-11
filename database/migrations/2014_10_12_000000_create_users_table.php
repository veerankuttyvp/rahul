<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('user_id');
			$table->string('full_name');
			$table->string('email')->unique();
			$table->string('password', 100)->nullable();
			$table->string('subscription', 100)->nullable();
			 $table->integer('stripe_id')->unsigned();
			 $table->integer('free_fs_count')->unsigned();
			 $table->timestamp('last_login');
			 $table->timestamp('last_payment');
			 $table->tinyInteger('status')->after('password')->default(1);
        

			$table->string('confirmation_code');
			$table->boolean('confirmed')->default(config('access.users.confirm_email') ? false : true);
			$table->rememberToken();
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
		Schema::drop('users');
	}
}
