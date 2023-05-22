<?php

namespace app\transfer;

class User{
	public $login;
	public $role;
	
	public function __construct($login, $role){
                                                getMessages()->addInfo('user construct');

		$this->login = $login;
		$this->role = $role;		
	}	
}