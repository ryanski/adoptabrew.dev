<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// DB::table('users')->delete();
		// DB::table('ideas')->delete();
		// DB::table('brews')->delete();

		$this->call('UsersTableSeeder');
		$this->call('IdeasTableSeeder');
		$this->call('BrewsTableSeeder');
		$this->call('EntrustSeeder');
		
	}

}
