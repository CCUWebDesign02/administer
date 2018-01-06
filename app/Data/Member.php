<?php
    namespace Data ;
    use Data \DataFactory;
    class Member extends DataFactory{
        public function getUser(){
            $query=Array();
            foreach($this->getDB()->query("SELECT `id`, `account`, `password`, `name`, `email`, `last_loggedin`, `updated_at`, `created_at` FROM `users` WHERE 1") as $row)
                $query[]=$row;
            return $query;
        }
        public function getUserName($id){
            $query=$this->getDB()->query("SELECT `id`, `account`, `password`, `name`, `email`, `last_loggedin`, `updated_at`, `created_at` FROM `users` WHERE id='$id'");
            $row=$query->fetch();
            return $row['name'];
        }
        public function getUserAccount($id){
            $query=$this->getDB()->query("SELECT `id`, `account`, `password`, `name`, `email`, `last_loggedin`, `updated_at`, `created_at` FROM `users` WHERE id='$id'");
            $row=$query->fetch();
            return $row['account'];
        }
    }
?>