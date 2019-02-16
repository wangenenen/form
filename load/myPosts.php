<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$num_rec_per_page = 10; //每页显示数量
// 1. 建立连接
$conn = mysqli_connect('localhost', 'root', 'admin', 'test');
mysqli_set_charset($conn,"utf8");
if (!$conn) {
    exit('<h1>连接数据库失败</h1>');
}

if (isset($_GET["page"])){
    $page=$_GET["page"];
}else{
    $page=1;
};
$start_from=($page-1) * $num_rec_per_page;
// 2. 开始查询
$name = $_SESSION['username'];
$sql = "select * from post where username ='".$name."' limit {$start_from},{$num_rec_per_page};";
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
        <aside class="col-md-3">
            <div  class="list-group">
                <a class="list-group-item list-group-item-action" href="index.php">我的资料</a>
                <a class="list-group-item list-group-item-action" href="cart.php">修改资料</a>
                <a class="list-group-item list-group-item-action" href="orders.php">修改密码</a>
                <a class="list-group-item list-group-item-action" href="myPosts.php">我的帖子</a>
                <a class="list-group-item list-group-item-action" href="orders.php">安全退出</a>
            </div >
        </aside>
        <main id="main" class="col-md-9" style="background-color: antiquewhite">
            <div class="table-responsive">
                <table class="table">
                    <caption>我的帖子</caption>
                    <thead>
                    <tr>
                        <th>编号</th>
                        <th>标题</th>
                        <th>发帖时间</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($item = mysqli_fetch_assoc($query)): ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><a href="../read.php?id=<?php echo $item['id'] ?>"><?php echo $item['title'] ?></a>
                        </td>
                        <td><?php echo $item['datatim']; ?></td>
                    </tr>
                    <?php endwhile ?>
                    </tbody>
                </table>
            </div>
            <div style="text-align: center">
                <ul class="pagination" style="float: right">
                    <?PHP
                    $sql ="select * from post where username ='".$name."' limit {$start_from},{$num_rec_per_page};";
                    $rs_result = mysqli_query($conn,$sql); //查询数据
                    $total_records = mysqli_num_rows($rs_result); //统计总共的记录条数
                    $total_pages = ceil($total_records / $num_rec_per_page); //计算总页数

                    echo "<li class=\"page-item\"><a class=\"page-link\" href='myPosts.php?page=1'>".'&laquo;'."</a></li>"; //第一页

                    for($i = 1; $i <= $total_pages; $i ++){
                        if ($page == $i){
                            echo "<li class=\"page-item active\"><a class=\"page-link\" href='myPosts.php?page=".$i."'>".$i."</a></li>";
                        }else{
                            echo "<li class=\"page-item\"><a class=\"page-link\" href='myPosts.php?page=".$i."'>".$i."</a></li>";
                        }

                    };
                    echo "<li class=\"page-item\"><a class=\"page-link\" href = 'myPosts.php?page=$total_pages'>".'&raquo;'."</a></li>"//最后一页
                    ?>
                </ul>

            </div>
            <br>
            <br>
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
</body>
</html>