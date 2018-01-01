<!-- https://coolors.co/e9eb87-e2dbbe-9dbbae-769fb6-188fa7
https://coolors.co/e9eb87-241623-f05d5e-0f7173-d56f3e
https://coolors.co/e9eb87-e2dbbe-7fb7be-d3f3ee-241623-->
<?php 
    require_once('../layouts/header.php'); 
    $sql="SELECT * FROM `announcement` ORDER BY `announcement`.`date` DESC";
    $announce=mysqli_query($connect,$sql);
    $date=date("y-m-d");
    $sql="SELECT * FROM `movie` where '$date' BETWEEN  movie_release and  movie_outofdate ORDER BY `movie`.`movie_release` DESC" ;
    $movie=mysqli_query($connect,$sql);
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div id="my-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#ad-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#ad-carouse" data-slide-to="1"></li>
                    <li data-target="#ad-carouse" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="../../imgs/歌喉讚3-BIG.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="../../imgs/與神同行-BIG.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="../../imgs/大娛樂家-BIG.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#my-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#my-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row now-release justify-content-around">
        <div class="col-12">
            <div class="titlebar">
                <div>現正熱映-></div>
                <hr />
            </div>
            <div class="row">
                <div class="col-4 d-flex flex-wrap justify-content-center">
                    <a href="#"><img src="../../moviepicture/<?php  $row=mysqli_fetch_array($movie); echo $row['movie_name'].'.jpeg'; ?>" /></a>
                    <div class="media ">
                        <img src="../../imgs/<?php echo $row['movie_rating'].'.png';?>" />
                        <div class="media-body align-self-center movie-title">
                            <a href="#">
                                <div><?php echo $row['movie_name'];?></div>
                                <div><?php echo $row['movie_release'];?></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex flex-wrap justify-content-center">
                <a href="#"><img src="../../moviepicture/<?php  $row=mysqli_fetch_array($movie); echo $row['movie_name'].'.jpeg'; ?>" /></a>
                <div class="media ">
                    <img src="../../imgs/<?php echo $row['movie_rating'].'.png';?>" />
                    <div class="media-body align-self-center movie-title">
                        <a href="#">
                            <div><?php echo $row['movie_name'];?></div>
                            <div><?php echo $row['movie_release'];?></div>
                        </a>
                    </div>
                </div>
                </div>
                <div class="col-4 d-flex flex-wrap justify-content-center">
                    <a href="#"><img src="../../moviepicture/<?php  $row=mysqli_fetch_array($movie); echo $row['movie_name'].'.jpeg'; ?>" /></a>
                    <div class="media ">
                        <img src="../../imgs/<?php echo $row['movie_rating'].'.png';?>" />
                        <div class="media-body align-self-center movie-title">
                            <a href="#">
                                <div><?php echo $row['movie_name'];?></div>
                                <div><?php echo $row['movie_release'];?></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-4 future-release">
            <div class="titlebar">
                <div>即將上映-></div>
                <hr />
            </div>
            <?php 
                $sql="SELECT * FROM `movie` where '$date' < movie_release  ORDER BY `movie`.`movie_release` ASC";
                $movie=mysqli_query($connect,$sql);
            ?>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div>
                        <a href=""><img src="../../moviepicture/<?php  $row=mysqli_fetch_array($movie); echo $row['movie_name'].'.jpeg'; ?>" /></a>
                        <div class="movie-title">
                            <a href="#">
                                <div><?php echo $row['movie_name'];?></div>
                                <div><?php echo $row['movie_release'];?></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7 motd">
            <div class="titlebar">
                <div>活動公告-></div>
                <hr />
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <table>
                        <?php 
                            for($i=0;$i<10;$i++){
                                $row=mysqli_fetch_array($announce);
                                echo "<tr onclick=\"location.href='#'\"><td>".$row[0]."</td><td>".$row[1]."</td><tr>";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../layouts/footer.php'); ?>