<?php
session_start();
if(isset($_SESSION['username']))
{
    unset($_SESSION['username']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>退出登录成功</title>
</head>
<body>
<h1>退出登录成功</h1>
<p>3秒后自动跳转到网站首页，如果没有跳转，请点击<a href="index.php">这里</a></p>
<script type="text/javascript">
    onload=function(){
        setInterval(go, 1000);
    };
    var x=3; //利用了全局变量来执行
    function go(){
        x--;
        if(x>0){
            document.getElementById("sp").innerHTML=x; //每次设置的x的值都不一样了。
        }else{
            location.href='index.php';
        }
    }
</script>
</body>
</html>
