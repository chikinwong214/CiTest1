<body>
这是User1控制器的index方法的视图<br>
<?php
//echo $title;
echo "<table border='1'>";
foreach($list as $key=>$value){
    echo "<tr>";
    echo "<td>{$value['id']}</td>";
    echo "<td>{$value['name']}</td>";
    echo "<td>{$value['email']}</td>";
    echo "</tr>";
}
?>
<table border="0">
    <tr>
        <td>编号</td>
        <td>姓名</td>
        <td>邮箱</td>
    </tr>
    <?php foreach($list as $item):?>
    <tr>
        <td><?=$item['id']?></td>
        <td><?=$item['name']?></td>
        <td><?=$item['email']?></td>
    </tr>
    <?php endforeach;?>
</table>

</body>
</html>