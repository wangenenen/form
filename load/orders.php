<?php
session_start();

$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$confirm = $_POST['confirm'];
// 1. 建立连接
$conn = mysqli_connect('localhost', 'root', 'admin', 'test');

if (!$conn) {
    exit('<h1>连接数据库失败</h1>');
}

// 2. 开始查询

$name = $_SESSION['username'];
$word = $_SESSION['password'];
$sql = "select * from users where username ='".$name."'  limit 1;";
$query = mysqli_query($conn,$sql );
if (!$query) {
    exit('<h1>查询数据失败</h1>');
}


$item = mysqli_fetch_assoc($query);

if (!$item) {
    exit('<h1>找不到你要编辑的数据</h1>');
}


$sql2 = "select password from users where username = '[$name]'";
$result = $conn->query($sql2);
$number = mysqli_num_rows($result);

if ( $word == $oldpassword ) {


    function edit ()
    {
        global $item;
        $item['newpassword'] = $_POST['newpassword'];
//    $item['email'] = $_POST['email'];
//    $item['phone'] = $_POST['phone'];
//    $item['qq'] = $_POST['qq'];
    }

    if ($newpassword != $confirm){
        echo '<script>alert("密码与确认密码应该一致");history.go(-1);</script>';
        exit(0);
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        edit();
    }
    $sql1="update users set password='{$item['newpassword']}' WHERE username='{$name}'";
    mysqli_query($conn,$sql1);
    $res_insert=mysqli_query($conn,$sql1);
    if ($res_insert) {
        echo '<script>window.location="../mysql.php";</script>';
    } else {
        echo "<script>alert('系统繁忙，请稍候！');</script>";
    }

} else {
    echo '<script>alert("原始密码错误！");history.go(-1);</script>';
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>主页面</title>
  <link rel="stylesheet" href="bootstrap.css">
    <script src="../js/biaodan.js">
    </script>
</head>
<body>
  <div class="container pt-4">
    <h1>会员中心</h1>
    <hr>
    <div class="row">
      <aside class="col-md-3">
        <div  class="list-group">
          <a class="list-group-item list-group-item-action" href="index.php">我的资料</a>
          <a class="list-group-item list-group-item-action" href="cart.php">修改资料</a>
          <a class="list-group-item list-group-item-action" href="orders.php">修改密码</a>
          <a class="list-group-item list-group-item-action" href="myPosts.php">我的帖子</a>
          <a class="list-group-item list-group-item-action" href="../mysql.php">安全退出</a>
        </div >
      </aside>
      <main id="main" class="col-md-9">
        <div class="table-responsive">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="Form" method="post" enctype="multipart/form-data" onsubmit="return qqq();">
                <table class="table">
                    <caption>修改密码</caption>
                    <tbody>

                    <tr>
                        <td>账号</td>
                        <td><?php echo $item['username']; ?></td>

                    </tr>
                    <tr>
                        <td>原密码</td>
                        <td><input type="text" value="" name="oldpassword" id="oldpassword" required="required"></td>

                    </tr>
                    <tr>
                        <td>新密码</td>
                        <td><input type="password" value="" name="newpassword" id="newpassword" required="required"></td>

                    </tr>
                    <tr>
                        <td>确认密码</td>
                        <td><input type="password" value="" name="confirm" id="confirm" required="required"></td>

                    </tr>


                    <tr>
                        <td><button>提交修改</button></td>


                    </tr>

                    </tbody>
                </table>
            </form>
        </div>
        <hr>
      </main>
    </div>
  </div>
</body>
</html>
