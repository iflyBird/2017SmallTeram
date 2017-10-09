<?php
echo "<body style='background-image: url(img/xiazaipic.jpg); background-repeat: no-repeat;background-size: cover;'>";
$connId=mysql_connect("localhost","root","");
mysql_select_db("dcms");
mysql_query("set names utf8");
$sql="select*from upload";
$result=mysql_query($sql);
echo "<table>";
echo"<tr><th>文件名</th></tr>";
while ($row=mysql_fetch_array($result)){
    echo"<tr><td><a href='$row[fpath]'>'$row[fname]'</a></td></tr>";
}
echo "</table>";

if(empty($connId)){
    echo "连接失败";
}
echo "</body>";
?>
<a href="HomePage.php"style="text-decoration: none;">返回首页</a>
