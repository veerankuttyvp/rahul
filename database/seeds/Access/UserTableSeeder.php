<?php

// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Carbon\Carbon as Carbon;

// class UserTableSeeder extends Seeder {

// 	public function run() {

// 		if(env('DB_DRIVER') == 'mysql')
// 			DB::statement('SET FOREIGN_KEY_CHECKS=0;');

// 		if(env('DB_DRIVER') == 'mysql')
// 			DB::table(config('auth.table'))->truncate();
// 		else //For PostgreSQL or anything else
// 			//DB::statement("TRUNCATE TABLE ".config('auth.table')." CASCADE");

// 		//Add the master administrator, user id of 1
// 		$users = [
// 			[
// 				'name' => 'Admin Istrator',
// 				'email' => 'admin@admin.com',
// 				'password' => bcrypt('1234'),
// 				'confirmation_code' => md5(uniqid(mt_rand(), true)),
// 				'confirmed' => true,
// 				'created_at' => Carbon::now(),
// 				'updated_at' => Carbon::now()
// 			],
// 			[
// 				'name' => 'Default User',
// 				'email' => 'user@user.com',
// 				'password' => bcrypt('1234'),
// 				'confirmation_code' => md5(uniqid(mt_rand(), true)),
// 				'confirmed' => true,
// 				'created_at' => Carbon::now(),
// 				'updated_at' => Carbon::now()
// 			],
// 		];

// 		DB::table(config('auth.table'))->insert($users);

// 		if(env('DB_DRIVER') == 'mysql')
// 			DB::statement('SET FOREIGN_KEY_CHECKS=1;');
// 	}
// }
