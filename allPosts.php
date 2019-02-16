<?php
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
$sql = "select * from post order by id desc limit {$start_from},{$num_rec_per_page}; ";
$rs_result = mysqli_query($conn,$sql); //查询数据
// 2. 开始查询
//$query = mysqli_query($conn, 'select * from post );
if (!$rs_result) {
    exit('<h1>查询数据失败</h1>');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Insert title here</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Make the image fully responsive */



        .backcolor li{
            font-size: 16px;
        }
        .moreright{
            float: right;
        }
        .Original-button{
            margin-bottom: 9px;
        }

    </style>
</head>
<body style="background: #f6f1e7;">
<div class="row">
    <div class="col-md-10 col-md-offset-1">

        <?php include 'top.php'; ?>
        <div class="ltitle">
            <span class="col-md-10">新帖榜</span>
            <span class="col-md-2 moreright" >
                                 <a href="#">More&gt;&gt;</a>
                             </span>
        </div>
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
            </tr>
            </thead>
            <tbody>
            <?php while ($item = mysqli_fetch_assoc($rs_result)): ?>
                <tr class="success">

                    <td>
                        <?php echo $item['username'] ?>
                    </td>
                    <td>
                        <a href="read.php?id=<?php echo $item['id'] ?>"><?php echo $item['title'] ?></a>
                    </td>
                    <td>
                        <?php echo $item['datatim'] ?>
                    </td>
                </tr>
            <?php endwhile ?>
            </tbody>
        </table>
        <div style="text-align: center">
            <ul class="pagination">
            <?PHP
            $sql ="SELECT * FROM post";
            $rs_result = mysqli_query($conn,$sql); //查询数据
            $total_records = mysqli_num_rows($rs_result); //统计总共的记录条数
            $total_pages = ceil($total_records / $num_rec_per_page); //计算总页数

            echo "<li><a href='allPosts.php?page=1'>".'&laquo;'."</a></li>"; //第一页

            for($i = 1; $i <= $total_pages; $i ++){
                if ($page == $i){
                    echo "<li class=\"active\"><a href='allPosts.php?page=".$i."'>".$i."</a></li>";
                }else{
                    echo "<li><a href='allPosts.php?page=".$i."'>".$i."</a></li>";
                }

            };
            echo "<li><a href = 'allPosts.php?page=$total_pages'>".'&raquo;'."</a></li>"//最后一页
            ?>
            </ul>

        </div>
    </div>
</div>
<?php include 'afterbody.php'; ?>
</body>
</html>