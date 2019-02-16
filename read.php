<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET' ){

    if (empty($_GET['id'])) {
        exit('<h1>必须传入指定参数</h1>');
    }
    $_SESSION["id"] = $_GET['id'];
}

$conn = mysqli_connect('localhost', 'root', 'admin', 'test');
mysqli_set_charset($conn,"utf8");
$id = $_SESSION["id"];
if (!$conn) {
    exit('<h1>连接数据库失败</h1>');
}
// 接收要修改的数据 ID
if ($_SERVER['REQUEST_METHOD'] == 'GET' ){

    if (empty($_GET['id'])) {
        exit('<h1>必须传入指定参数</h1>');
    }
    $_SESSION["id"] = $_GET['id'];
}

if($_SERVER['REQUEST_METHOD'] == 'POST' ){

// 1. 建立连接

    $name = $_SESSION['username'];
    $news = $_POST['news'];
    $query2 = mysqli_query($conn, "insert into comment (com_username,news,post_id) values ('{$name}', '{$news}', '{$id}');");
    if (!$query2) {
        $GLOBALS['error_message'] = '查询过程失败';
        echo "SAdfsadfsadfsadf";
    }

    $affected_rows = mysqli_affected_rows($conn);

    if ($affected_rows !== 1) {
        $GLOBALS['error_message'] = '添加数据失败';
        return;
    }

    // 响应
    header('Location: read.php?id='.$id);
}









// 2. 开始查询
// 因为 ID 是唯一的 那么找到第一个满足条件的就不用再继续了 limit 1
$query = mysqli_query($conn, "select * from post where id = {$id} limit 1;");
if (!$query) {
    exit('<h1>查询数据失败</h1>');
}

$query1 = mysqli_query($conn, "select * from comment where post_id = {$id};");

if (!$query1) {
    exit('<h1>查询数据失败</h1>');
}



 // 2. 开始查询



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>帖子内容</title>
    <link rel="stylesheet" href="css/weibu.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .weibu{
            background-image: url('http://img2.imgtn.bdimg.com/it/u=1898869886,2031246828&fm=26&gp=0.jpg');
        }

    </style>
</head>
<body style="background: #f6f1e7;" >
<?php
if(!isset($_SESSION['username'])) {
    echo "<script>alert('你好，访问该模块请先登录');</script>";
    echo '<script>window.location="login.php";</script>';
}
?>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <?php include 'top.php'; ?>
        <div class="panel panel-danger">

            <div class="panel-body weibu">
                <div class="col-md-10 col-md-offset-1 huantouming">
                    <?php while ($item = mysqli_fetch_assoc($query)): ?>
                    <h1><?php echo $item['title'] ?></h1>
                    <p></p>
                    <p style="text-align: right"><span style="color: red"><?php echo $item['username'] ?></span>发表于<?php echo $item['datatim'] ?></p>
                    <hr>
                    <div class="magin" style="margin-top: 40px; margin-bottom: 20px; font-size: 16px">



                                    &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $item['content'] ?>

                        <?php endwhile ?>

                    </div>
<hr>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-horizontal">
                        <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="news" id="news" placeholder="说说你的看法" required="required">

                                </div>

                            <button type="submit"><a>发表</a></button>
                            </div>
                    </form>
                    <hr>

            </div>
<br>
                <hr>
                <div class="col-md-10 col-md-offset-1 huantouming" style="margin-top: 5px">
                    <?php while ($item1 = mysqli_fetch_assoc($query1)): ?>
                    <div>

                                         <p>   <?php echo $item1['news'] ?></p>

                        <p style="text-align: right"><span style="color: red"><?php echo $item1['com_username'] ?></span>发表于<?php echo $item1['com_data'] ?></p>

                    </div>
                    <hr>
                    <?php endwhile ?>

                </div>
            </div>


</div>
</div>
</div>
<?php include 'afterbody.php'; ?>
</body>
</html>