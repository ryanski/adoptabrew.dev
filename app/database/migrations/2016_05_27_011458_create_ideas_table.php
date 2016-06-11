<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ideas', function($table)
		{
			$table->increments('id');
			// $table->integer('id')->unsigned()->foreign('id')->references('user')->on('user');
			$table->string('username', 100);
			$table->string('brewname', 100);
			$table->text('description');
			$table->softDeletes();
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
		Schema::drop('ideas');
	}

}
