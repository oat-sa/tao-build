<?php

require_once "phing/types/DataType.php";

class TaoDbConfig extends DataType {

	private $dbDriver;
	private $dbHost = 'localhost';
	private $dbName;
	private $dbUser;
	private $dbPass;

	public function setDbDriver($driver){
		$this->dbDriver = $driver;
	}

	public function setDbHost($host){
		$this->dbHost = $host;
	}

	public function setDbName($dbName){
		$this->dbName = $dbName;
	}

	public function setDbUser($user){
		$this->dbUser = $user;
	}

	public function setDbPass($pass){
		$this->dbPass = $pass;
	}

	public function toArray(){
		
		return array(
			"db_driver" 		=> $this->dbDriver,
			"db_host" 			=> $this->dbHost,
			"db_name"			=> $this->dbName,
			"db_user"			=> $this->dbUser,
			"db_pass"			=> $this->dbPass
		);
	}


}