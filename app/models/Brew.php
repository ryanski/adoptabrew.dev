<?php


class Brew extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * 
	 */
	protected $table = 'brews';

	protected $fillable = [
		'user_id',
		'brewery',
		'description', 
		'goal',
		'deadline',
		'video'
	];

	public static $rules = array(
		'brewname' => 'required|min:2|max:100',
		'description' => 'required|min:20|max:1000',
		'goal' => 'required',
		'deadline' => 'required',
		'video' => 'required'
		);

	public function user()
	{
		return $this->belongsTo('User');
	}

}