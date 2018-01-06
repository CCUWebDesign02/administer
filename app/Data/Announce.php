<?php
    namespace Data ;
    use Data \DataFactory;
    class Announce extends DataFactory{
        public function getAnnounce(){
            $query=Array();
            foreach($this->getDB()->query("SELECT * FROM `motds` WHERE 1") as $row)
                $query[]=$row;
            return $query;
        }
        public function InsertAnnounce($title,$content,$update,$creat){
           return  ($this->getDB()->exec("INSERT INTO `motds`( `title`, `content`, `updated_at`,`created_at`) 
            VALUES ('$title','$content','$update','$creat')")) ? true : false ;
        }
        public function deleteAnnounce($id){
          return   ($this->getDB()->exec(" DELETE FROM `motds` WHERE  id=$id")) ? true : false ;
        }
        public function getSelectAnnounce($id){
            $query=$this->getDB()->query("select * from motds where id=$id");
            $row=$query->fetch();
            return $row;
        }
        public function EditAnnounce($id,$title,$content,$update){
            echo "UPDATE `motds` SET `title`='$title',`content`='$content,`updated_at`=$update WHERE id='$id'";
            $query=$this->getDB()->exec("UPDATE `motds` SET `title`='$title',`content`='$content',`updated_at`='$update' WHERE id='$id'");
        }
    }
?>