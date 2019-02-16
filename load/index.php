<?php
header("Content-type: text/html; charset=utf-8");
session_start();

// 1. 建立连接
$conn = mysqli_connect('localhost', 'root', 'admin', 'test');
mysqli_set_charset($conn,"utf8");
if (!$conn) {
    exit('<h1>连接数据库失败</h1>');
}

// 2. 开始查询
$name = $_SESSION['username'];
$sql = "select * from users where username ='".$name."'  limit 1;";
$query = mysqli_query($conn,$sql );
if (!$query) {
    exit('<h1>查询数据失败</h1>');
}

// 3. 遍历结果集
 //while ($item = mysqli_fetch_assoc($query)) {
 //  $data[] = $item;
//

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>主页面</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="../nprogress.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="../js/biaodan.js"></script>

  <style>
      a {
          text-decoration: none;
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
    .loading {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      background-color: rgba(0, 0, 0, .6);
      font-size: 30px;
    }
    .fanHui{

        position: relative;
        display: block;
        padding: 0.75rem 1.25rem;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.125);
    }
  </style>
  <script src="../nprogress.js"></script>
</head>
<body style="background-image: url('https://f10.baidu.com/it/u=2932485689,903246839&fm=72')">
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="../index.php">首页</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../allPosts.php">帖子</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../edition.php">板块</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../helped.php">帮助</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<p></p>

  <div class="container pt-4">
      <div><h2>个人中心</h2></div>
      <hr>
    <div class="row">
      <aside class="col-md-3" >
        <div class="list-group" >
          <a class="list-group-item list-group-item-action" href="index.php">我的资料</a>
          <a class="list-group-item list-group-item-action" href="cart.php">修改资料</a>
          <a class="list-group-item list-group-item-action" href="orders.php">修改密码</a>
          <a class="list-group-item list-group-item-action" href="myPosts.php">我的帖子</a>
          <a class="fanHui list-group-item-action" href="../mysql.php">安全退出</a>
        </div>
      </aside>
      <main id="main" class="col-md-9" style="background-color: antiquewhite">
        <div class="table-responsive">
          <table class="table">

            <caption>我的资料</caption>
            <tbody>
            <?php while ($item = mysqli_fetch_assoc($query)): ?>
            <tr>
              <td>账号</td>
              <td><?php echo $item['username']; ?></td>

            </tr>
            <tr>
              <td>昵称</td>
              <td><?php echo $item['nickname']; ?></td>

            </tr>
            <tr>
              <td>邮箱</td>
              <td><?php echo $item['email']; ?></td>

            </tr>
            <tr>
              <td>电话</td>
              <td><?php echo $item['phone']; ?></td>

            </tr>
            <tr>
              <td>QQ</td>
              <td><?php echo $item['qq']; ?></td>

            </tr>
            <?php endwhile ?>
            </tbody>
          </table>
        </div>
        <hr>
      </main>
    </div>
  </div>
<p></p>
<p></p>
<br>
<nav class=" bg-dark navbar-dark fixed-bottom">
    <div style="text-align: center; ">
    <h3 class="text-white">欢迎来到本网站</h3>

    </div>
</nav>


  <div class="loading">正在玩命加载中...</div>
  <script src="../jquery.js"></script>
<script>

    function qqq() {
        var y=document.forms["Form"]["newpassword"].value;
        if (y.length < 6 || y.length > 16) {
            alert("请检查密码长度,长度应在6-16位数");
            return false;
        }else if(y.replace(/(&nbsp;)|\s|\u00a0/g, '')=="" || y.replace(/(&nbsp;)|\s|\u00a0/g, '')==null){
            alert("密码不能含空格!");
            return false;
        }
    }
</script>
  <script>
    $(function ($) {
      // $(document)
      //   .ajaxStart(function () {
      //     // 只要有 ajax 请求发生 就会执行
      //     $('.loading').fadeIn()
      //     // 显示加载提示
      //     console.log('注意即将要开始请求了')
      //   })
      //   .ajaxStop(function () {
      //     // 只要有 ajax 请求结束 就会执行
      //     $('.loading').fadeOut()
      //     // 结束提示
      //     console.log('请求结束了')
      //   })

      $(document)
        .ajaxStart(function () {
          NProgress.start()
        })
        .ajaxStop(function () {
          NProgress.done()
        })

      // 有一个独立的作用域，顺便确保页面加载完成执行
      $('.list-group-item').on('click', function () {
        var url = $(this).attr('href')
        $('#main').load(url + ' #main > *')
        return false
      })
    })
  </script>
</body>
</html>