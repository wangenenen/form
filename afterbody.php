<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/1
 * Time: 9:50
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Insert title here</title>
    <style>

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
<div class="col-12">
    <div style="text-align: center" class="well well-lg">
        <a href="aboutForum.php">关于论坛</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="technicalSupport.php">技术支持</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="privacyPolicy.php">隐私政策</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="contactUs.php">联系我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <?php
        if(isset($_SESSION['username'])) {
            $admin = "admin";
            if (($_SESSION['username']) == ($admin)) {


                echo "<a href='backstage/management.php'>后台管理</a>";

            } else {
                echo "<span>欢迎来到本站</span>";
            }
        }else {
            echo "<span>欢迎来到本站</span>";
        }
        ?>

        <br>
        <span>Copyright@2017  |广东省江门市</span>
        <br>
        <span>电话：0755-XXXXXXX 邮箱：XXX@XX.com</span>
    </div>
</div>

</body>
</html>
