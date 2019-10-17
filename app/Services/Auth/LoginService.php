<?php

namespace App\Services\Auth;

use App\Repositories\Auth\LoginRepository;

class LoginService{

	public function __construct(){
		$this->loginRepository = new LoginRepository;
	}

	public function login(){
		//Here we should write the business logic
		//connection with repositories goes from services
		return $this->loginRepository->login();

	}
}