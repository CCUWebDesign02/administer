<?php
 require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'environment.php');
 require_once(__DIR__ . '/../../autoload.php');
 use \Data \Recommend;
 use \Data \Movie;
 $Movie=new Movie();
 $Recommend = new Recommend();
 extract($_GET);
 if($Recommend->checkRecommend($newmovie))header("location:../../public/recommend.php?");
 else{
 $element=$Movie->getSelectMovie($newmovie);
 $Recommend->InsertRecommend($element[0]['movie_name'],$element[0]['movie_release'],$element[0]['movie_rating'],$element[0]['movie_plot']);
 $Recommend->delectRecommend($oldmovie);
 header("location:../../public/recommend.php?");
 }
?>