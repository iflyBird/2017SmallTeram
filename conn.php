
<?php
$conn=mysql_connect("localhost","root","")or die("数据库服务器连接错误".mysql_error());
if($conn)
{
    //echo "<script>alert('数据库连接成功！')</script>";
}
mysql_select_db("dcms")or die("数据库访问错误".mysql_error());

mysql_query("set names utf8");

//if($s)
    //{
    //    echo "<script>alert('成功！')</script>";
    //}

//else{

//    echo "<script>alert('失败！')</script>";
//}
//echo"<script>window.location.href='.php';</script>";
//@mysql_free_result($sql);
//mysql_close($conn);

?>