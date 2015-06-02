<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ClientsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('clients')->delete();

        $clients = [
            ['id' => 1, 'name' => 'Speeech GmbH', 'slug' => 'client-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Hirschau München', 'slug' => 'client-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Löwenbräuzelt', 'slug' => 'client-3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Impuls Lebensraum', 'slug' => 'client-4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Ringana, Fresh For Life', 'slug' => 'client-5', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        ];

		DB::table('clients')->insert($clients);
	}

}
