<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brews', function($table)
		{
			$table->increments('id');
			$table->string('username', 100)->unique();
			$table->string('brewname', 100);
			$table->string('brewery', 100);
			$table->text('description')->nullable();
			$table->integer('goal');
			$table->date('deadline');
			$table->string('video',200);
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
		Schema::drop('brews');
	}

}
