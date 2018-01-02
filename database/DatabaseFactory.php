<?php
    class DatabaseFactory{
        private $db;
        public function __construct(){
            $this->connect();
        }
        public function connect(){
            try{
                $config=parse_ini_file("config.ini");
                $dsn=sprintf("%s:host=%s;dbname=%s",$config['dbtype'],$config['host'],$config['dbname']);
                $this->db=new PDO($dsn,$config['username'],$config['password']);
                $this->db->exec("set names utf8");
            }
            catch (PDOException $e){
                print "Couldn't connect to the database: ".$e->getMessage();
            }
        }
        public function getDB() {
            return $this->db;
        }
        public function getSelect($sql){
            $query=Array();
            foreach($this->db->query($sql) as $row){
                $query[]=$row;
            }
            return $query;
        }
    }
?>