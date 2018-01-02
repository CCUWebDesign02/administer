<?php
    function __autoload($classname){
        $filename=__DIR__ ."/database/" .$classname .".php";
        if(is_readable($filename)){
            require $filename;
        }
    }
?>