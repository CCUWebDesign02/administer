<!DOCTYPE html>
<?php 
require_once("../checkout.php") ;
require_once('../../connect.php');
?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css?v0.2">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <title>香蕉影城 Banana Cinemas</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div class="container">
                    <div class="row">
                        <div class="col-2 logo align-items-center">
                            <a href="/"><img src="../../imgs/logo.png" alt=""></a>
                        </div>
                        <div class="col"></div>
                        <div class="col-3">
                            <div class="row">
                                <a href="https://www.facebook.com" class="social_icon">
									<img src="imgs/facebook.png" alt="">
								</a>
                                <a href="" class="social_icon">
									<img src="imgs/twitter.png" alt="">
								</a>
                                <a href="" class="social_icon">
									<img src="imgs/google-plus.png" alt="">
								</a>
                            </div>
                            <div class="row">
                                <span><?php echo "Welcome<br>".$_SESSION['admin_name'] ?></span>
                                <button type="button" class="btn btn-top" onclick="location.href='../logout.php'">登出</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="container px-0">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav justify-content-around">
                                <li class="nav-item">
                                    <a class="nav-link px-5" href="../home">首頁</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-5" href="../member">查看會員資料</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-5" href="../updataMovie">上傳電影</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-5" href="../setTime">電影時間安排</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-5" href="../announcement">新增活動公告</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>