<?php
class IdeasTableSeeder extends Seeder {

	public function run()
	{
		$idea1 = new Idea();
		$idea1->user_id = User::find(1)->id;
		$idea1->brewname = 'Whistout';
		$idea1->description = 'Stout beer with flavor of maple and whiskey.';
		$idea1->save();

		$idea2 = new Idea();
		$idea2->user_id = User::find(1)->id;
		$idea2->brewname = 'Outback Beer';
		$idea2->description = 'Pale ale with a spicy kick from native peppers of Australia.  The label with feature all the deadly creatures of the outback.';
		$idea2->save();

		$idea3 = new Idea();
		$idea3->user_id = User::find(2)->id;
		$idea3->brewname = 'HIPA';
		$idea3->description = 'Hoppiest IPA ever made.  Just one will leave you hoppy!';
		$idea3->save();

		$idea4 = new Idea();
		$idea4->user_id = User::find(2)->id;
		$idea4->brewname = 'Cider ale';
		$idea4->description = 'Ale and cider combine to make the most balanced beer ever.';
		$idea4->save();

	


	}
}