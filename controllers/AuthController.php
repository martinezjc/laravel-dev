<?php

class AuthController extends BaseController {

	public function get_login()
	{
		return View::make('autentificacion');
		#return View::make('carpeta.autentificacion'); 
	}

	
}