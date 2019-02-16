<?php
session_start();
// 1. 建立连接
$conn = mysqli_connect('localhost', 'root', 'admin', 'test');
mysqli_set_charset($conn,"utf8");
if (!$conn) {
    exit('<h1>连接数据库失败</h1>');
}

// 2. 开始查询
$query = mysqli_query($conn, 'select * from post limit 5;');
if (!$query) {
    exit('<h1>查询数据失败</h1>');
}

$query1 = mysqli_query($conn, 'select * from post order by id desc limit 5;');
if (!$query) {
    exit('<h1>查询数据失败</h1>');
}

$query2 = mysqli_query($conn, 'select * from post limit 10,5;');
if (!$query) {
    exit('<h1>查询数据失败</h1>');
}
$query3 = mysqli_query($conn, 'select * from notice ');
if (!$query) {
    exit('<h1>查询数据失败</h1>');
}
$query4 = mysqli_query($conn, 'select * from help ');
if (!$query) {
    exit('<h1>查询数据失败</h1>');
}
// 3. 遍历结果集
// while ($item = mysqli_fetch_assoc($query)) {
//   $data[] = $item;
// }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">
    <title>Insert title here</title>
    <link rel="stylesheet" href="css/index.css">
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



        <div class="col-md-12" align="left">
            <div style="float: left;">
                <a href="index.php" title="论坛首页"><img
                            src="img/homepage_24.png" /> </a>
            </div>
            <div style="float: left;line-height:24px;">&nbsp;&gt;&nbsp;论坛
            </div>
        </div>

        <div class="col-md-12 " >
            <div class="row clearfix" >
                <div class="col-md-8 column">

                    <div class="ltitle">
                        <span class="col-md-10">热帖榜TOP10</span>
                        <span class="col-md-2 moreright" >
                                 <a href="#">More&gt;&gt;</a>
                             </span>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>
                                编号
                            </th>
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
                        <?php while ($item = mysqli_fetch_assoc($query)): ?>
                        <tr class="success">
                            <td>
                                <?php echo $item['id'] ?>
                            </td>
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
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <div class="ltitle">
                                <span class="col-md-10">新帖榜TOP10</span>
                                <span class="col-md-2 moreright">
                                 <a href="#">More&gt;&gt;</a>
                             </span>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        编号
                                    </th>
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
                                <?php while ($item1 = mysqli_fetch_assoc($query1)): ?>
                                    <tr class="success">
                                        <td>
                                            <?php echo $item1['id'] ?>
                                        </td>
                                        <td>
                                            <?php echo $item1['username'] ?>
                                        </td>
                                        <td>
                                            <a href="read.php?id=<?php echo $item1['id'] ?>"><?php echo $item1['title'] ?></a>
                                        </td>
                                        <td>
                                            <?php echo $item1['datatim'] ?>
                                        </td>
                                    </tr>
                                <?php endwhile ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <div class="ltitle">
                                <span class="col-md-10">精帖榜TOP10</span>
                                <span class="col-md-2 moreright">
                                 <a href="#">More&gt;&gt;</a>
                             </span>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        编号
                                    </th>
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
                                <?php while ($item2 = mysqli_fetch_assoc($query2)): ?>
                                    <tr class="success">
                                        <td>
                                            <?php echo $item2['id'] ?>
                                        </td>
                                        <td>
                                            <?php echo $item2['username'] ?>
                                        </td>
                                        <td>
                                            <a href="read.php?id=<?php echo $item2['id'] ?>"><?php echo $item2['title'] ?></a>
                                        </td>
                                        <td>
                                            <?php echo $item2['datatim'] ?>
                                        </td>
                                    </tr>
                                <?php endwhile ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 column">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <div class="rtitle">
                                <span class="col-md-12">论坛公告</span>

                            </div>
                            <table class="table table-condensed table-striped table-hover">

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
                                <?php while ($item3 = mysqli_fetch_assoc($query3)): ?>
                                <tr class="success">

                                    <td>
                                        <?php echo $item3['username'] ?>
                                    </td>
                                    <td>
                                        <a href="announcement.php?id=<?php echo $item3['id'] ?>"><?php echo $item3['not_title'] ?></a>
                                    </td>
                                    <td>
                                        <?php echo $item3['not_data'] ?>
                                    </td>
                                </tr>
                                <?php endwhile ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="publishPost.php"><button type="button" class="btn btn-primary btn-lg btn-block Original-button" style="margin-bottom: 9px;">我要发帖</button></a>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <div class="rtitle">
                                <span class="col-md-12">论坛帮助</span>

                            </div>
                            <table class="table table-condensed table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        编号
                                    </th>
                                    <th>
                                        标题
                                    </th>
                                    <th>
                                        发布时间
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($item4 = mysqli_fetch_assoc($query4)): ?>
                                <tr class="success">
                                    <td>
                                        <?php echo $item4['id'] ?>
                                    </td>
                                    <td>
                                        <a href="helped.php"><?php echo $item4['he_titme'] ?></a>
                                    </td>
                                    <td>
                                        <?php echo $item4['he_data'] ?>
                                    </td>

                                </tr>
                                <?php endwhile ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <div class="rtitle">
                                <span class="col-md-12">友情链接</span>

                            </div>
                            <table class="table table-condensed table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        编号
                                    </th>
                                    <th>
                                        产品
                                    </th>
                                    <th>
                                        交付时间
                                    </th>
                                    <th>
                                        状态
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        TB - Monthly
                                    </td>
                                    <td>
                                        01/04/2012
                                    </td>
                                    <td>
                                        Default
                                    </td>
                                </tr>
                                <tr class="success">
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        TB - Monthly
                                    </td>
                                    <td>
                                        01/04/2012
                                    </td>
                                    <td>
                                        Approved
                                    </td>
                                </tr>
                                <tr class="error">
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        TB - Monthly
                                    </td>
                                    <td>
                                        02/04/2012
                                    </td>
                                    <td>
                                        Declined
                                    </td>
                                </tr>
                                <tr class="warning">
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        TB - Monthly
                                    </td>
                                    <td>
                                        03/04/2012
                                    </td>
                                    <td>
                                        Pending
                                    </td>
                                </tr>
                                <tr class="info">
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        TB - Monthly
                                    </td>
                                    <td>
                                        04/04/2012
                                    </td>
                                    <td>
                                        Call in to confirm
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<?php include 'afterbody.php'; ?>
</body>
</html>