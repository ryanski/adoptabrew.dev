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

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function user()
	{
		return $this->belongsTo('User');
	}

}