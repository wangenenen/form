<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>联系我们</title>
    <link rel="stylesheet" href="css/weibu.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .weibu{
            background-image: url('./img/beijing2.jpg');
        }
    </style>
</head>
<body style="background: #f6f1e7;">
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <?php include 'top.php'; ?>
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title" style="height: 20px">
                    <div class="topBody" align="left">
                        <div style="float: left;">
                            <a href="index.php" title="论坛首页"><img
                                    src="img/homepage_24.png"/> </a>
                        </div>
                        <div style="float: left;line-height:24px;">
                            &nbsp;&gt;&nbsp;<a href="./index.php">论坛</a>&nbsp;&gt;&nbsp;联系我们
                        </div>
                    </div>
                </h3>
            </div>
            <div class="panel-body weibu">
                <div class="col-md-10 col-md-offset-1 huantouming">
                    <h2 style="text-align: center">联系我们</h2>
                    <br><br>
                    <div class="col-md-11 col-md-offset-1">
                        <p>电话：XXXXXXXXXX</p>
                        <p>QQ：XXXXXXXXXX</p>
                        <p>邮箱：XXXXXXXX@XX.COM</p>
                        <p>地址：广东省江门市</p>
                        <p>WX：XXXXXXXXXX</p>
                    </div>
                    <br>
                    <p>
                        <span>&nbsp;&nbsp;&nbsp;目前本论坛还在初步建设中，还有很多功能会陆续推出，敬请期待，谢谢大家的支持！</span>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'afterbody.php'; ?>
</body>
</html>
