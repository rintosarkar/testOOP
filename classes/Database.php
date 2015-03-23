<?php

class Database{
	/*private $db_host;
	private $db_user;
	private $db_password;
	private $db_database;*/

	function __construct($host,$user,$password,$database){
		$db = new mysqli($host,$user,$password,$database);

	}
}