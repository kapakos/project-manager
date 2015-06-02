<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('users')->delete();

        $users = [
            ['id' => 1, 'firstname' => 'Petros', 'lastname' => 'Kapakos',  'email' => 'petros@kapakos.de', 'password' => bcrypt('Man.0f.war'), 'created_at' => new DateTime, 'updated_at' => new DateTime]
            ];

		DB::table('users')->insert($users);
	}

}
