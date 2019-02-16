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
$sql = "select * from notice;";
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
    <title>Title</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
    </style>
</head>
<body style="background-image: url('https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=695304989,2451570367&fm=26&gp=0.jpg')">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
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
<div class="container pt-4">
    <div><h2>后台管理</h2></div>
    <hr>
    <div class="row">
        <aside class="col-md-3">
            <div  class="list-group">
                <a class="list-group-item list-group-item-action" href="management.php">论坛宗旨</a>
                <a class="list-group-item list-group-item-action" href="user.php">用户管理</a>
                <a class="list-group-item list-group-item-action" href="card.php">帖子管理</a>
                <a class="list-group-item list-group-item-action" href="notice.php">公告管理</a>
                <a class="list-group-item list-group-item-action" href="../index.php">返回首页</a>
            </div >
        </aside>
        <main id="main" class="col-md-9">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>

                        <th>
                            作者
                        </th>
                        <th>
                            标题
                        </th>
                        <th>
                            发帖时间
                        </th>
                        <th>

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($item = mysqli_fetch_assoc($query)): ?>
                        <tr class="success">

                            <td>
                                <?php echo $item['username'] ?>
                            </td>
                            <td>
                                <a href="../announcement.php?id=<?php echo $item['id'] ?>"><?php echo $item['not_title'] ?></a>
                            </td>
                            <td>
                                <?php echo $item['not_content'] ?>
                            </td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="notic_delete.php?id=<?php echo $item['id'] ?>">删除</a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                    </tbody>
                </table>
            </div>
            <hr>
        </main>
    </div>
</div>
<nav class=" bg-dark navbar-dark ">
    <div style="text-align: center; ">
        <h3 class="text-white" style="margin-bottom: -3px">欢迎来到本网站</h3>
    </div>
</nav>

</body>
</html>