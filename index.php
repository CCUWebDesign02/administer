<?php error_reporting(E_ALL || ~E_NOTICE);  ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Banana movie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></link>
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Banana Movie</h1>
            <p>Administor Login</p> 
        </div>
        <div class="row" >
            <div class="col-md-offset-4 col-md-4 well">   <!--將畫面設為在版面的中間-->
                <form role="form" method="POST" action="login.php">
                    <div class="form-group">
                        <label for="exampleInputAccount">帳號</label>
                        <input type="text" class="form-control" name="account" placeholder="請輸入帳號" size="20">
                    </div>
                    <div class="form-group has-warning">
                        <label for="exampleInputPassword">密碼</label>
                        <input type="password" class="form-control" name="password" placeholder="請輸入密碼" size="20">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm btn-block">登入</button>
                    <?php 
                        if($_GET['error']!='')
                            echo $_GET['error'];
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>