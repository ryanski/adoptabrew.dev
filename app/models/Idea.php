<?php


class Idea extends BaseModel {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ideas';

	protected $fillable = [
		'username', 
		'brewname',
		'description'
	];
	

	

}