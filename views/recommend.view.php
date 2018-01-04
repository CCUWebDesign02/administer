<?php
    require_once(__DIR__ . '/../autoload.php');
    use \Data \Recommend;
    use \Data \Movie;
    $Recommend = new Recommend();
    $Movie=new Movie();
    $date=date("y-m-d");
    $recommendList=$Recommend->getRecommend();
    $movielist=$Movie->getOnMovie($date);
 ?>
<p>
    <br />
</p>
<div class="container" id="recommend">
    <h1 class="text-center">電影推薦</h1>
    <hr>
    <div class="container-fluid align-center row " >
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <img src="moviepicture/<?php echo$recommendList[0]['movie_ID'].".jpeg"?>" alt="<?php echo $recommendList[0]['movie_ID'];?>">
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 MovieIntroduce">   
        <div class="input-group">
            <span class="input-group-addon">上架電影</span>
            <input id="selShowingDate" type="text" class="form-control" contenteditable="false" value="<?php echo $recommendList[0]['movie_ID'];?>" readonly="true">
            <div class="input-group-btn">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">選取</button>
                <ul class="dropdown-menu pull-right"><?php foreach($movielist as $row) echo "<li><a href=\"../app/upData/updatarecommend.php?newmovie=".$row[0]."&oldmovie=".$recommendList[0]['movie_ID']."\">".$row[0]."</a></li>";?></ul>
            </div>
        </div>
        <h1 class="MovieDetail"><?php echo $recommendList[0]['movie_ID'];?></h1>
        <ul class="Detail">
            <li clase="glyphicon glyphicon-calendar"> 上映日期：<?php echo $recommendList[0]['releasedate'];?></li>
            <li> 片長：1時45分</li>
            <li> 分級：<?php echo $recommendList[0]['rating'];?></li>
        </ul>
        <p class="MovieDetail"><?php echo $recommendList[0]['plot'];?></p>
        </div>
    </div>
    <hr>
    <div class="container-fluid align-center row " >
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <img src="moviepicture/<?php echo$recommendList[1]['movie_ID'].".jpeg"?>" alt="<?php echo$recommendList[1]['movie_ID'];?>">
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 MovieIntroduce">   
            <div class="input-group">
                <span class="input-group-addon">上架電影</span>
                <input id="selShowingDate" type="text" class="form-control" contenteditable="false" value="<?php echo $recommendList[1]['movie_ID'];?>" readonly="true">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">選取</button>
                    <ul class="dropdown-menu pull-right"><?php foreach($movielist as $row) echo "<li><a href=\"../app/upData/updatarecommend.php?newmovie=".$row[0]."&oldmovie=".$recommendList[1]['movie_ID']."\">".$row[0]."</a></li>";?></ul>
                </div>
            </div>
            <h1 class="MovieDetail"><?php echo $recommendList[1]['movie_ID'];?></h1>
            <ul class="Detail">
                <li clase="glyphicon glyphicon-calendar"> 上映日期：<?php echo $recommendList[1]['releasedate'];?></li>
                <li> 片長：1時45分</li>
                <li> 分級：<?php echo $recommendList[1]['rating'];?></li>
            </ul>
            <p class="MovieDetail"><?php echo $recommendList[1]['plot'];?></p>
        </div>
    </div>
    <hr>
    <div class="container-fluid align-center row " >
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <img src="moviepicture/<?php echo$recommendList[2]['movie_ID'].".jpeg"?>" alt="<?php echo $recommendList[2]['movie_ID'];?>">
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 MovieIntroduce">   
            <div class="input-group">
                <span class="input-group-addon">上架電影</span>
                <input id="selShowingDate" type="text" class="form-control" contenteditable="false" value="<?php echo $recommendList[2]['movie_ID'];?>" readonly="true">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">選取</button>
                    <ul class="dropdown-menu pull-right">
                        <?php foreach($movielist as $row) echo "<li><a href=\"../app/upData/updatarecommend.php?newmovie=".$row[0]."&oldmovie=".$recommendList[2]['movie_ID']."\">".$row[0]."</a></li>";?>
                    </ul>
                </div>
            </div>
            <h1 class="MovieDetail"><?php echo $recommendList[2]['movie_ID'];?></h1>
            <ul class="Detail">
                <li clase="glyphicon glyphicon-calendar"> 上映日期：<?php echo $recommendList[2]['releasedate'];?></li>
                <li> 片長：1時45分</li>
                <li> 分級：<?php echo $recommendList[2]['rating'];?></li>
            </ul>
            <p class="MovieDetail"><?php echo $recommendList[2]['plot'];?></p>
        </div>
    </div>
</div>