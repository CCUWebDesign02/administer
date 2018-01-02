<?php
    namespace data;
    class DatabaseFactory{
        private $db=0;
        public function __construct(){
            $this->connect();
        }
        public function connect(){
            try{
                $config=parse_ini_file("config.ini");
                $dsn=sprintf("%s:host=%s;dbname=%s",$config['dbtype'],$config['host'],$config['dbname']);
                $db=new PDO($dsn,$config['username'],$config['password']);
                $db->exec("set names utf8");
            }
            catch (PDOException $e){
                print "Couldn't connect to the database: ".$e->getMessage();
            }
        }
        public function getDB() {
            return $this->$db;
        }
    }
?>