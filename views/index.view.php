<?php error_reporting(E_ALL || ~E_NOTICE);  ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Banana movie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></link>
    <script src="main.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Banana Movie</h1>
            <p>Administor Login</p> 
        </div>
        <div class="row" >
            <div class="col-md-offset-4 col-md-4 well">   <!--將畫面設為在版面的中間-->
                <form id="form1" name="form1" method="post" action="index.php" onclick="return false">   
                    <div class="form-group">
                        <label for="exampleInputAccount">帳號</label>
                        <input type="text" class="form-control" name="account" placeholder="請輸入帳號" size="20" id="account">
                    </div>
                    <div class="form-group has-warning">
                        <label for="exampleInputPassword">密碼</label>
                        <input type="password" class="form-control" name="password" placeholder="請輸入密碼" size="20" id="password">
                    </div>
                    <input type="submit" name="button" id="button" value="登入" class="btn btn-primary btn-sm btn-block" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script>
 $(document).ready(function(){
    $("#button").click(function(){
        if($("#account").val()==""){
            alert("你尚未填寫帳號");
            eval("document.form1['account'].focus()");       
        }else if($("#password").val()==""){
            alert("你尚未填寫密碼");
            eval("document.form1['password'].focus()");    
        }else{
            document.form1.submit();
        }
    })
 })
</script>