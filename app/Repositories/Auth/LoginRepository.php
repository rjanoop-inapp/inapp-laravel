<?php

namespace App\Repositories\Auth;

use App\Models\Login;
use Illuminate\Database\Eloquent\Model;

Class LoginRepository extends Model{
	public function login(){
		return "reached login repo";
	}
}