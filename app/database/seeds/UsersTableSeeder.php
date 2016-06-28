<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$user1 = new User();
		$user1->username = 'RyanSki';
		$user1->email = 'ryanbentkowski@gmail.com';
		$user1->password = Hash::make($_ENV['USER_PASS'])	;
		$user1->zipcode = '78163';
		$user1->save();

		$user2 = new User();
		$user2->username = 'Garrett';
		$user2->email = 'GarrettGriffith85@gmail.com';
		$user2->password = Hash::make($_ENV['USER_PASS'])	;
		$user2->zipcode = '78163';
		$user2->save();

		$user3 = new User();
		$user3->username = 'Robot';
		$user3->email = 'rbpacations@gmail.com';
		$user3->password = Hash::make($_ENV['USER_PASS'])	;
		$user3->zipcode = '78163';
		$user3->save();


	}
}