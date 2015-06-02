<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('project_id')->unsigned()->default(0);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->integer('client_id')->unsigned()->default(0);
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->string('name')->default('');
            $table->string('slug')->default('');
            $table->string('description')->default('');
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
		Schema::drop('tasks');
	}

}
