<?php
class IdeasTableSeeder extends Seeder {

	public function run()
	{
		$ideas = new Ideas();
		$ideas->username = 'RyanSki';
		$ideas->brewname = 'Whistout';
		$ideas->description = 'Stout beer with flavor of maple and whiskey.'
		$ideas->save();

		$ideas = new Ideas();
		$ideas->username = 'RyanSki';
		$ideas->brewname = 'Outback Beer';
		$ideas->description = 'Pale ale with a spicy kick from native peppers of Australia.  The label with feature all deadly creatures of the outback.'
		$ideas->save();

		$ideas = new Ideas();
		$ideas->username = 'Garrett';
		$ideas->brewname = 'HIPA';
		$ideas->description = 'Hoppiest IPA ever made.  Just one will leave you hoppy!'
		$ideas->save();

		$ideas = new Ideas();
		$ideas->username = 'Garrett';
		$ideas->brewname = 'Cider ale';
		$ideas->description = 'Ale and cider combine to make the most balanced beer ever.'
		$ideas->save();

	


	}
}