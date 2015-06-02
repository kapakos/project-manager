<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateTaskTrackersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_trackers', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('task_id')->unsigned()->default(0);
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('project_id')->unsigned()->default(0);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->dateTime('started_at')->default(Carbon::now());
            $table->dateTime('ended_at')->nullable();
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
		Schema::drop('task_trackers');
	}

}
