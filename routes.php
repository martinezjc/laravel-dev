<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	#return View::make('hello');
});*/

/*Route::get('agregar-admin', Function()
{
	$account = new Account;// we create a new Account model 
	$admin = new Admin;// we create a new Admin model
    
    $account->login = "admin02";
    $account->password = sha1(("123"));
    $account->accounttype = "1";
    $account->save();

    $type =  DB::table('accounts')
	    ->where('login', '=', "admin02")
	    ->first();

    $admin->fullname = "Administrador 02";
    $admin->email = "admin02@mail.com";
    $admin->idaccounts = $type->accountstype;
    return "Admin Generado";
    //$admin->idaccounts =   

    return "Aqui agregamos un nuevo administrador";
});*/

Route::get('/', array('uses' => 'AccountsController@get_login'));
Route::get('autentificacion', array('uses' => 'AccountsController@get_login'));

Route::post('comprobar', array('uses' => 'AccountsController@post_login'));

Route::get('employees', Function(){
	return "Admin Panel";
});
Route::get('users', Function(){
	return "User Panel";
});
