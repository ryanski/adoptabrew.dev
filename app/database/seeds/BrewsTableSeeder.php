<?php
class BrewsTableSeeder extends Seeder {

	public function run()
	{
		$brews = new Brews();
		$brews->username = 'RyanSki';
		$brews->brewname = 'Whistout';
		$brews->brewery = 'Alamo';
		$brews->description = 'Stout beer with flavor of maple and whiskey.'
		$brews->goal = '5000';
		$brews->deadline = '07-31-2016';
		$brews->video = 'https://www.youtube.com/embed/aV36ytSgC3o';
		$brews->save();

		$brews = new Brews();
		$brews->username = 'RyanSki';
		$brews->brewname = 'Peachale';
		$brews->brewery = 'Karbach';
		$brews->description = 'Ale with flavor of peaches and lemons.'
		$brews->goal = '5000';
		$brews->deadline = '08-31-2016';
		$brews->video = 'https://www.youtube.com/embed/aV36ytSgC3o';
		$brews->save();

		$brews = new Brews();
		$brews->username = 'RyanSki';
		$brews->brewname = 'Manly Pilsner';
		$brews->brewery = 'Alamo';
		$brews->description = 'Pilsner beer with crisp flavor and medium hop.'
		$brews->goal = '5000';
		$brews->deadline = '09-25-2016';
		$brews->video = 'https://www.youtube.com/embed/aV36ytSgC3o';
		$brews->save();

		$brews = new Brews();
		$brews->username = 'RyanSki';
		$brews->brewname = 'Kiwi Shandy';
		$brews->brewery = 'Alamo';
		$brews->description = 'Shandy beer with a tinge of kiwi juice.'
		$brews->goal = '5000';
		$brews->deadline = '07-31-2016';
		$brews->video = 'https://www.youtube.com/embed/aV36ytSgC3o';
		$brews->save();

		$brews = new Brews();
		$brews->username = 'RyanSki';
		$brews->brewname = 'Whistout';
		$brews->brewery = 'Alamo';
		$brews->description = 'Stout beer with flavor of maple and whiskey.'
		$brews->goal = '5000';
		$brews->deadline = '07-31-2016';
		$brews->video = 'https://www.youtube.com/embed/aV36ytSgC3o';
		$brews->save();

		$brews = new Brews();
		$brews->username = 'RyanSki';
		$brews->brewname = 'Whistout';
		$brews->brewery = 'Alamo';
		$brews->description = 'Stout beer with flavor of maple and whiskey.'
		$brews->goal = '5000';
		$brews->deadline = '07-31-2016';
		$brews->video = 'https://www.youtube.com/embed/aV36ytSgC3o';
		$brews->save();
	}
}