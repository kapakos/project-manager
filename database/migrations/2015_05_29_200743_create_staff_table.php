<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staff', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('client_id')->unsigned()->default(0);
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->string('firstname')->default('');
            $table->string('lastname')->default('');
            $table->string('email')->unique();
            $table->string('slug')->default('');
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
		Schema::drop('staff');
	}

}
