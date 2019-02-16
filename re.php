
<?php
header("Content-type: text/html; charset=utf-8");
$username = $_POST["username"];
$nickname = $_POST["nickname"];
$password = $_POST["password"];
$confirm = $_POST["confirm"];
$email = $_POST["email"];
if ($username == ''){
    echo '<script>alert("请输入用户名！");history.go(-1);</script>';
    exit(0);
}
if ($password == ''){
    echo '<script>alert("请输入密码");history.go(-1);</script>';
    exit(0);
}
if ($password != $confirm){
    echo '<script>alert("密码与确认密码应该一致");history.go(-1);</script>';
    exit(0);
}
if($password == $confirm){
    $conn = new mysqli('localhost','root','admin','test');
    if ($conn->connect_error){
        echo '数据库连接失败！';
        exit(0);
    }else {
        $sql = "select username from users where username = '$_POST[username]'";
        $result = $conn->query($sql);
        $number = mysqli_num_rows($result);
        if ($number) {
            echo '<script>alert("用户名已经存在");history.go(-1);</script>';
        } else {
            $sql_insert = "insert into users (username,password,nickname,email) values('$_POST[username]','$_POST[password]','$_POST[nickname]','$_POST[email]')";
            $res_insert = $conn->query($sql_insert);
            if ($res_insert) {
                echo '<script>window.location="tiaozhuan.html";</script>';
            } else {
                echo "<script>alert('系统繁忙，请稍候！');</script>";
            }
        }
    }
}else{
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}

