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
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users');
			// $table->string('username', 100);
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
	// Schema::table('ideas', function($table) 
	// {
	// 	$table->dropForeign('ideas_user_id_foreign');
	// 	$table->dropColumn('user_id');
	// });
	}

}
