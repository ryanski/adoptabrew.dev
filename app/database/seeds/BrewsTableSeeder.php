<?php
class BrewsTableSeeder extends Seeder {

	public function run()
	{
		$brew1 = new Brew();
		$brew1->username = 'RyanSki';
		$brew1->brewname = 'Whistout';
		$brew1->brewery = 'Alamo';
		$brew1->description = 'Stout beer with flavor of maple and whiskey.';
		$brew1->goal = '5000';
		$brew1->deadline = '07-31-2016';
		$brew1->video = 'https://www.youtube.com/embed/aV36ytSgC3o';
		$brew1->save();

		$brews2 = new Brew();
		$brews2->username = 'RyanSki';
		$brews2->brewname = 'Peachale';
		$brews2->brewery = 'Karbach';
		$brews2->description = 'Ale with flavor of peaches and lemons.';
		$brews2->goal = '5000';
		$brews2->deadline = '08-31-2016';
		$brews2->video = 'https://www.youtube.com/embed/aV36ytSgC3o';
		$brews2->save();

		$brew3 = new Brew();
		$brew3->username = 'RyanSki';
		$brew3->brewname = 'Manly Pilsner';
		$brew3->brewery = 'Alamo';
		$brew3->description = 'Pilsner beer with crisp flavor and medium hop.';
		$brew3->goal = '5000';
		$brew3->deadline = '09-25-2016';
		$brew3->video = 'https://www.youtube.com/embed/aV36ytSgC3o';
		$brew3->save();

		$brew4 = new Brew();
		$brew4->username = 'RyanSki';
		$brew4->brewname = 'Kiwi Shandy';
		$brew4->brewery = 'Alamo';
		$brew4->description = 'Shandy beer with a tinge of kiwi juice.';
		$brew4->goal = '5000';
		$brew4->deadline = '07-31-2016';
		$brew4->video = 'https://www.youtube.com/embed/aV36ytSgC3o';
		$brew4->save();

		$brew5 = new Brew();
		$brew5->username = 'RyanSki';
		$brew5->brewname = 'Whistout';
		$brew5->brewery = 'Alamo';
		$brew5->description = 'Stout beer with flavor of maple and whiskey.';
		$brew5->goal = '5000';
		$brew5->deadline = '07-31-2016';
		$brew5->video = 'https://www.youtube.com/embed/aV36ytSgC3o';
		$brew5->save();

		$brew6 = new Brew();
		$brew6->username = 'RyanSki';
		$brew6->brewname = 'Whistout';
		$brew6->brewery = 'Alamo';
		$brew6->description = 'Stout beer with flavor of maple and whiskey.';
		$brew6->goal = '5000';
		$brew6->deadline = '07-31-2016';
		$brew6->video = 'https://www.youtube.com/embed/aV36ytSgC3o';
		$brew6->save();
	}
}