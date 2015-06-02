<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TasksTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('tasks')->delete();

        $tasks = [
            ['id' => 1, 'name' => 'Research Wordpress Theme', 'slug' => 'task-1',  'description' => 'Finding themes in themeforest', 'client_id' => 1, 'project_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'name' => 'Redesign wordpress theme', 'slug' => 'task-2',  'description' => 'New layout and design', 'client_id' => 1, 'project_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 3, 'name' => 'Design of contact page', 'slug' => 'task-3',  'description' => 'New contact page design', 'client_id' => 1, 'project_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 4, 'name' => 'Chosing wordpress theme', 'slug' => 'task-4', 'description' => 'Finding themes in themeforest', 'client_id' => 1, 'project_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ];

		DB::table('tasks')->insert($tasks);
	}
}
