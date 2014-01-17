<?php
class Admin extends Eloquent
{
	protected $table = 'admins'; 

	public function accounts()
	{
		return $this->belongsTo('accounts');
	}
	
}
?>