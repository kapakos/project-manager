<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProjectsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('projects')->delete();

        $projects = [
            ['id' => 1, 'name' => 'Website Design', 'slug' => 'project-1',  'description' => 'Design concept for Webpage', 'client_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Website programming', 'slug' => 'project-2', 'description' => 'Implementation of website in wordpress', 'client_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Web SEO', 'slug' => 'project-3', 'description' => 'Search Engine Optimization for website', 'client_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Website Design', 'slug' => 'project-4', 'description' => 'Design concept for Website', 'client_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Website Design', 'slug' => 'project-5', 'description' => 'Design concept for Website', 'client_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime]
        ];

		DB::table('projects')->insert($projects);
	}

}
