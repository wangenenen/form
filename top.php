<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insert title here</title>

    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <style>
        /* Make the image fully responsive */
        .carousel-inner img {
    width: 100%;
    height: 100%;
}
        .xiugaixiayi{
    margin-bottom: 5px;
        }
a:link {
    color: black;
    text-decoration: none;
} /* 未被访问的链接 */
a:visited {
    color: black;
} /* 已被访问的链接 */
a:hover {
    text-decoration: underline;
    color: #67ADF2;
} /* 鼠标指针移动到链接上 */
a:active {
    color: black;
    text-decoration: underline;
}


    </style>
</head>
<body>




             <nav class="navbar navbar-default xiugaixiayi" role="navigation">
             <div class="container-fluid">
                 <div class="navbar-header">
                     <a class="navbar-brand" href="index.php"><img src="img/lo.png"></a>
                 </div>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <a
                         onclick="SetHome(window.location)" href="javascript:void(0)">设为首页</a>
                 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a
                     onclick="AddFavorite(window.location,document.title)"
                     href="javascript:void(0)">收藏本站</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                 <a href="javascript:void(0);" onclick=" toDesktop(location.href,'我的网站')">保存到桌面</a>
                 <ul class="nav navbar-nav navbar-right">
                     <?php

if(isset($_SESSION['username'])){

    echo "欢迎会员",$_SESSION['username'],"    ";
    echo "<a href='load/index.php'>&nbsp;个人中心</a>";
    echo "<a href='mysql.php'>&nbsp;退出</a>";

}else{
    echo     "<li><a href=\"register.php\"><span class=\"glyphicon glyphicon-user\"></span> 注册</a></li>
                     <li><a href=\"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span> 登录</a></li>";
}
?>


                 </ul>
             </div>
         </nav>


             <div id="myCarousel" class="carousel slide xiugaixiayi ">
                 <!-- 轮播（Carousel）指标 -->
                 <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                 </ol>
                 <!-- 轮播（Carousel）项目 -->
                 <div class="carousel-inner">
                     <div class="item active">

                         <img src="img/logo.jpg" alt="First slide">
                     </div>
                     <div class="item">
                         <img src="img/guanggao2.jpg" alt="Second slide">
                     </div>
                     <div class="item">
                         <img src="img/guanggao1.jpg" alt="Third slide">
                     </div>
                 </div>
                 <!-- 轮播（Carousel）导航 -->
                 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                 </a>
                 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                 </a>
             </div>

             <nav class="navbar navbar-inverse" role="navigation" style="margin-bottom:5px">
                 <div class="container-fluid row">
                     <div class="navbar-header col-md-1">
                         <a class="navbar-brand" href="index.php">首页</a>
                     </div>
                     <div class="col-md-7">
                         <ul class="nav navbar-nav">
                             <li><a href="publishPost.php">发帖</a></li>
                             <li><a href="edition.php">板块</a></li>
                             <li><a href="helped.php">帮助</a></li>
                             <li class="dropdown" id="onmouse1">
                                 <a href="allPosts.php" class="dropdown-toggle" data-toggle="dropdown" >
    帖子 <b class="caret"></b>
                                 </a>
                                 <ul class="dropdown-menu" id="tiezi1">

                                     <li><a href="allPosts.php">精品帖子</a></li>
                                     <li class="divider"></li>
                                     <li><a href="allPosts.php">热门帖子</a></li>
                                 </ul>
                             </li>
                             <script>
document.getElementById("onmouse1").onmouseover=function () {
    document.getElementById("tiezi1").style.display="block";
}
                                 document.getElementById("onmouse1").onmouseout=function () {
                                     document.getElementById("tiezi1").style.display="none";
                                 }
                             </script>

                         </ul>
                     </div>
                     <form class="navbar-form navbar-left search-d" role="search" method="get" action="search.php">
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="Search" value="" name="val" required="required">
                         </div>
                         <button type="submit" class="btn btn-default" value="">提交</button>
                     </form>
                 </div>
             </nav>


             <script src="js/top.js"></script>

</body>
</html>