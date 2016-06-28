<?php


class User extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * 
	 */
	protected $table = 'users';


	protected $fillable = [
		'username', 
		'brewname',
		'description',
		'password',
		'zipcode'
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/** User has many ideas
	*/
	public function ideas()
	{
		return $this->hasMany('Idea');
	}

	/*
	 *	hasMany brews on Brew
	 */
	 public function brews()
	 {
	 	return $this->hasMany('Brew');
	 }
	
	 

}
