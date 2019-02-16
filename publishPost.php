<?php
session_start();

$conn = mysqli_connect('localhost', 'root', 'admin', 'test');
mysqli_set_charset($conn,"utf8");
if (!$conn) {
    $GLOBALS['error_message'] = '连接数据库失败';
    return;
}


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // 取值
        $name = $_SESSION['username'];
        $title = $_POST['title'];
        $content = $_POST['content'];


        // 1. 建立连接

        // var_dump("insert into users values (null, '{$name}', {$gender}, '{$birthday}', '{$avatar}');");
        // 2. 开始查询
        $query2 = mysqli_query($conn, "insert into post (username,title,content) values ('{$name}', '{$title}', '{$content}');");

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
        header('Location: index.php');
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .danxing {
            background: #67ADF2;
            font-size: 20px;
        }
        .shuangxing td {
            border: 1px solid green;
        }
    </style>
</head>
<body style="background: #f6f1e7;">
<?php
if(!isset($_SESSION['username'])) {
    echo "<script>alert('你好，访问该模块请先登录');</script>";
    echo '<script>window.location="login.php";</script>';
}
?>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <?php include 'top.php'; ?>
        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" >
            <table class="col-md-12">
            <tr class="danxing " ><td class="col-md-12" colspan="2">发布帖子</td></tr>
                <tr class="shuangxing">
                    <td>文章标题</td>
                    <td><input type="text" name="title" id="title"> </td>
            </tr>
                <tr class="shuangxing">
                    <td>文章内容</td>
                    <td><textarea class="form-control" rows="8" name="content" id="content"></textarea></td>
                </tr>
                <tr class="shuangxing">
                    <td>选择板块</td>
                    <td><select name="country" onChange="getCity()" id="xzbk">
                            <option value="0">--请选择大板块--</option>
                            <option value="1">网游竞技</option>
                            <option value="2">单机热游</option>
                            <option value="3">手游休闲</option>

                        </select>
                        <select name="city" id="xzbk1">
                            <option value="0">--请选择小板块--</option>
                        </select>

                    </td>
                </tr>
                <tr class="shuangxing">
                    <td></td>
                    <td><br>
                        <button type="submit" class="btn btn-primary">发布帖子</button>
                        <button type="button" class="btn btn-warning">取消</button>
                        <p></p>
                        <p>这里发言，表示您接受了最玩游戏交流论坛的用户行为准则。</p>
                        <p> 请对您的言行负责，并遵守中华人民共和国有关法律法规,尊重网上道德。</p>
                    </td>

                </tr>
            </table>
        </form>
        <hr>
    </div>
</div>
<?php include 'afterbody.php'; ?>

</body>
<script>
    var city=[
        ["英雄联盟","炉石传说","DOTA2","DNF","逆水寒","魔兽世界","无限法则","Artifact","堡垒之夜","NBA2KOL2"],
        ["绝地求生","怀旧游戏","怪物猎人","格斗游戏","ATLAS","NBA2K","战地风云","骑马与砍杀","全面战争","灵魂筹码"],
        ["刺激战场","王者荣耀","全军出击","狼人杀专区","火影忍者","QQ飞车","CF手游","明日之后","阴阳师","皇室战争"],

    ];
    function getCity(){
        var sltCountry=document.getElementById("xzbk");   //获得国家下拉框的对象
        var sltCity=document.getElementById("xzbk1");     //获得城市下拉框的对象
        var country=city[sltCountry.selectedIndex-1];    //得到对应国家的城市数组
        sltCity.length=1;    //清空城市下拉框，仅留提示选项。
        //通过for循环，将城市中的值填充到城市下拉框中
        for(var i=0;i<country.length;i++){
            sltCity[i+1]=new Option(country[i],country[i]);
        }
    }
</script>
</html>