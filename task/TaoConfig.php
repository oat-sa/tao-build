<?php

require_once "phing/types/DataType.php";

class TaoConfig extends DataType {

	private $taoDbConfig;
	private $generisConfig;

	private $login;
	private $pass;

	public function createGenerisConfig(){
		$this->generisConfig = new generisConfig();
		return $this->generisConfig;
	}

	public function createTaoDbConfig(){
		$this->taoDbConfig = new TaoDbConfig();
		return $this->taoDbConfig;
	}



	public function setLogin($login){
		$this->login = $login;
	}
	public function setPass($pass){
		$this->pass = $pass;
	}


	public function toArray(){

		$returnValue = array(

			"user_login"		=> $this->login,
			"user_pass1"		=> $this->pass,
			"user_email"		=> "",
			"user_firstname"	=> "",
			"user_lastname"		=> "",
			"import_local" 		=> true,


		);

		return array_merge($this->taoDbConfig->toArray(),$this->generisConfig->toArray(),$returnValue);
	}
}
