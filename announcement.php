<?php
header("Content-type: text/html; charset=utf-8");
session_start();
if (empty($_GET['id'])) {
    exit('<h1>必须传入指定参数</h1>');
}

$id = $_GET['id']; // => 1,2,3

// 1. 建立连接
$conn = mysqli_connect('localhost', 'root', 'admin', 'test');
mysqli_set_charset($conn,"utf8");
if (!$conn) {
    exit('<h1>连接数据库失败</h1>');
}

// 2. 开始查询

$sql = "select * from notice where id = {$id} limit 1;";
$query = mysqli_query($conn,$sql );
if (!$query) {
    exit('<h1>查询数据失败</h1>');
}

// 3. 遍历结果集
//while ($item = mysqli_fetch_assoc($query)) {
//  $data[] = $item;
//

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>联系我们</title>
    <link rel="stylesheet" href="css/weibu.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .weibu{
            background-image: url('http://img0.imgtn.bdimg.com/it/u=2577164940,655611090&fm=26&gp=0.jpg');
        }
    </style>
</head>
<body style="background: #f6f1e7;">
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <?php include 'top.php'; ?>
        <div class="panel panel-danger">

            <div class="panel-body weibu">
                <div class="col-md-10 col-md-offset-1 huantouming">
                    <h2 style="text-align: center">公告详情</h2>
                    <br><br>
                    <div>
                        <table>
                            <tbody>
                            <?php while ($item = mysqli_fetch_assoc($query)): ?>
                                <tr class="success">

                                    <td>

                                    </td>
                                    <td>
                                        <?php echo $item['not_content'] ?>
                                    </td>

                                </tr>
                            <?php endwhile ?>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'afterbody.php'; ?>
</body>
</html>
