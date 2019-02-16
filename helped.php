<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>论坛帮助</title>

    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

        #left{

            background-color: rgba(255,255,255,0.5);


            padding-top: 20px;
            padding-bottom: 50px
        ;
        }
        .helped{
            background-image: url(http://uploads.5068.com/allimg/1712/151-1G202135034.jpg);
        }
        #right{
            background-color: rgba(255,255,255,0.5);
        }
        #left1{
            font-size: 19px;
            cursor:pointer;
        }
        #left2{
            font-size: 16px;
            cursor:pointer;
        }
        #right2{
            display: none;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body style="background: #f6f1e7;">
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <?php include 'top.php'; ?>
        <div>
            <div class="smallNav" align="left">
                <div style="float: left;">
                    <a href="index.php" title="论坛首页"><img
                            src="img/homepage_24.png"></img> </a>
                </div>
                <div style="float: left;line-height:24px;">
                    &nbsp;&gt;&nbsp;<a href="index.php">论坛</a>&nbsp;&gt;&nbsp;论坛帮助
                </div>
            </div>
            <br>
            <div class="helped col-md-12">
                <div id="left" class="col-md-3">
                    <a><p id="left1">登录与注册 </p></a>
                    <a> <p id="left2">密码注意事项 </p></a>
                </div>
                <div id="right" class="col-md-8">
                    <div id="right1">
                        <h2>登录与注册 </h2>
                        <h4><strong>如何注册论坛账号</strong></h4>
                        &nbsp;&nbsp;<p> &nbsp;&nbsp;&nbsp;&nbsp;点击论坛右上角的"注册"进行注册。注册成功之后，系统会自动跳转到论坛首页。</p>
                        <h4><strong>如何登录论坛</strong></h4>
                        &nbsp;&nbsp;<p>&nbsp;&nbsp;&nbsp;&nbsp;如果您已经注册成功，您可以点击页面右上角的登录进行登录，进入登录界面填写正确的用户名、密码，点击"登录"即可完成登录。登录成功后会自动跳转到论坛首页。</p>
                        <p style="text-align: right">发布于： 2017-10-09 16:34:20 </p>
                    </div>
                    <div id="right2"><h2>密码注意事项</h2>
                        <h4><strong>忘记密码</strong></h4>
                        &nbsp;&nbsp;<p>&nbsp;&nbsp; &nbsp;&nbsp;目前还没有找回密码的功能，所以请大家先牢记自己的密码，论坛会加紧时间进一步开发这个功能，敬请期待，谢谢！</p>
                        <h4><strong>修改密码</strong></h4>
                        &nbsp;&nbsp;<p>&nbsp;&nbsp;&nbsp;&nbsp;登录后点击论坛右上角"个人中心"-"修改密码" 可以修改登录密码。</p>
                        <p style="text-align: right">发布于： 2017-10-09 16:34:11 </p></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("left2").onclick=function(){
        document.getElementById("right2").style.display="block";
        document.getElementById("right1").style.display="none";
        document.getElementById("left2").style.fontSize="19px";
        document.getElementById("left1").style.fontSize="16px"
    }
    document.getElementById("left1").onclick=function(){
        document.getElementById("right1").style.display="block";
        document.getElementById("right2").style.display="none";
        document.getElementById("left1").style.fontSize="19px";
        document.getElementById("left2").style.fontSize="16px"
    }
</script>
<?php include 'afterbody.php'; ?>
</body>
</html>
