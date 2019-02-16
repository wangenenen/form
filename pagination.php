<?php
$num_rec_per_page = 10; //每页显示数量
$conn = mysqli_connect('localhost', 'root', 'admin', 'test');
mysqli_set_charset($conn,"utf8");
if (isset($_GET["page"])){
    $page=$_GET["page"];
}else{
    $page=1;
};
$start_from=($page-1) * $num_rec_per_page;
$sql = "select * from post limit {$start_from},{$num_rec_per_page}; ";
$rs_result = mysqli_query($conn,$sql); //查询数据

?>

<table>
    <tr><td>名称</td> <td>电话</td> </tr>
    <?php while ($item = mysqli_fetch_assoc($rs_result)): ?>

    <tr>
        <td> <?php echo $item ['username']; ?> </td>
        <td> <?php echo $item ['title']; ?> </td>
    </tr>

    <?php endwhile ?>
</table>

    <ul class="pagination">
<?PHP
$sql ="SELECT * FROM post";
$rs_result = mysqli_query($conn,$sql); //查询数据
$total_records = mysqli_num_rows($rs_result); //统计总共的记录条数
$total_pages = ceil($total_records / $num_rec_per_page); //计算总页数

echo "<a href='pagination.php?page=1'>".'| <'."</a>"; //第一页

for($i = 1; $i <= $total_pages; $i ++){
echo "<li class=\"active\"><a href='pagination.php?page=".$i."'>".$i."</a></li>";
};
echo "<a href = 'pagination.php?page=$total_pages'>".'>|'."</a>"//最后一页
?>
    </ul>
