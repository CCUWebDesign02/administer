<?php

namespace Data;

class DatabaseFactory {
	public  $db;
	public function __construct() {
		$this->connect();
	}
	public function connect() {
		try {
			$config = parse_ini_file(BASE_PATH . DIRECTORY_SEPARATOR . 'config.ini');
			$dsn = sprintf("%s:host=%s;port=%s;dbname=%s", $config['DB_CONNECTION'], $config['DB_HOST'], $config['DB_PORT'], $config['DB_DATABASE']);
			$this->db = new \PDO($dsn, $config['DB_USERNAME'], $config['DB_PASSWORD']);
			$this->db->exec("set names utf8");
		}
		catch (\PDOException $e) {
			print "Couldn't connect to the database: " . $e->getMessage();
		}
	}
	public function disconnect() {
	}
	public function getDB() {
		return $this->$db;
	}
}
?>