<?php

namespace Mvc\Core;

use \PDO;

class Database
{
	public static $pdo;

	public function init()
	{
		$hostname = 'localhost';
		$dbname = 'free_course';
		$username = 'root';
		$password = 'root';
		
		try {
			self::$pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password, array(
				PDO::ATTR_PERSISTENT => true
			));
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(\PDOException $e){
			throw new \Exception("Ga bisa connect ke database");
		}
	}
}