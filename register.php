

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Insert title here</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Internship Sign In & Sign Up Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/snow.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <script type="text/javascript" src="js/biaodan.js"></script>

    <!-- //web font -->
</head>
<body>
<div class="snow-container">
    <div class="snow foreground"></div>
    <div class="snow foreground layered"></div>
    <div class="snow middleground"></div>
    <div class="snow middleground layered"></div>
    <div class="snow background"></div>
    <div class="snow background layered"></div>
</div>


<div class="top-buttons-agileinfo">
    <a href="index.php">首页</a>
    <a href="login.php">登录</a><a href="register.php" class="active">注册</a>
</div>
<h1>欢迎来到本论坛</h1>
<div class="main-agileits">
    <!--form-stars-here-->
    <div class="form-w3-agile">
        <h2 class="sub-agileits-w3layouts">注册</h2>
        <form action="re.php" name="myForm" method="post" enctype="multipart/form-data" onsubmit="return validateForm();"  autocomplete="off">
            <input type="text" name="username" placeholder="请输入用户名" required=""  onblur="return checkname()" id="uName"/>
            <input type="text" name="nickname" class="form-control" id="lastname" placeholder="请输入昵称" required="" onblur="return checknic()"  id="uNic">
            <input type="password" name="password" id="password" placeholder="请输入密码" required="" onblur="return checkpass();" />
            <input type="password" name="confirm" placeholder="请再次输入密码" required="" id="uRPass" onblur="return checkrpass();" onfocus="warnRpass()" />

            <input type="email" name="email" class="form-control" id="firstname" placeholder="请输入邮箱" required="" onblur="return checkemail();" id="email" ;>
            <div class="submit-w3l">
                <input type="submit" name="submit" value="注册">
            </div>
            <p class="p-bottom-w3ls"><a href="login.php">如果您已有账号，请在这里登录</a></p>
        </form>
    </div>
</div>
<!--//form-ends-here-->
<!-- copyright -->
<div class="copyright w3-agile">
    <p> © 2017 Internship Sign In & Sign Up Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
</div>
<!-- //copyright -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>


</body>
</html>
