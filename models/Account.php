<?php
class Account extends Eloquent
{
	protected $table = 'accounts'; 

	public function set_password($string)
	{
		$this->set_attribute('password', Hash::make($string));
	}
	
	public function users()
	{
		return $this->hasOne('users');
	}

	public function admins()
	{
		return $this->hasOne('admins');
	}

	 public function Login($query)
    {
        $users = DB::table('accounts')
                    ->where('votes', '>', 100)
                    ->orWhere('name', 'John')
                    ->get();
    }
}
?>