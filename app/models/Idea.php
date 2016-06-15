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

	public static $rules = array(
		// 'username'	=> 'required|min:6|max:50',
		'brewname' => 'required|min:2|max:100',
		'description' => 'required|min:20|max:1000'
	);

	/** Idea belong to a single User
	*/
	public function user()
	{
		return $this->belongsTo('User');
	}
	

	

}