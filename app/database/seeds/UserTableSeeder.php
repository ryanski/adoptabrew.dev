<?php
class UserTableSeeder extends Seeder {

	public function run()
	{
		$user = new User();
		$user->username = 'RyanSki';
		$user->email = 'ryanbentkowski@gmail.com';
		$user->password = Hash::make($_ENV['USER_PASS'])	;
		$user->zipcode = '78163';
		$user->save();

		$user = new User();
		$user->username = 'Garrett';
		$user->email = 'GarrettGriffith85@gmail.com';
		$user->password = Hash::make($_ENV['USER_PASS'])	;
		$user->zipcode = '78163';
		$user->save();

		$user = new User();
		$user->username = 'Robot';
		$user->email = 'ryanbentkowski@gmail.com';
		$user->password = Hash::make($_ENV['USER_PASS'])	;
		$user->zipcode = '78163';
		$user->save();


	}
}