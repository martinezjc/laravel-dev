<?php

class AccountsController extends BaseController {

	public function get_login()
	{
		return View::make('autentificacion');
		#return View::make('carpeta.autentificacion'); 
	}
	public function post_login()
	{
		$pass = sha1(Input::get('password'));

		$user =  DB::table('accounts')
	    ->where('login', '=', Input::get('username'))
	    ->where('password', '=', $pass)
	    ->first();
	
		if (empty($user)) {
    		return "Bad username or password";
		}		
		else{
			if ($user->accountstype == 1) {
				return Redirect::to('employees');
			}
			else if ($user->accountstype == 2) {
				return Redirect::to('users');
			}
			else
			{
				return "Error";
			}
		}
	}

	
}