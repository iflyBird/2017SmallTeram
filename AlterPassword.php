<?php
include "MySqlAdmin.php";
session_start();
if(isset($_POST['submit']))
{
	$upDatePW=$_POST["upDatePW"];
	$upDateDay=$_POST["upDateDay"];
	$upDateYX=$_POST["upDateYX"];
	$upDateTell=$_POST["upDateTell"];
	
	$username=$_SESSION["username"];
	
	if($upDatePW!="")
	{
		$sql="update studentinfor set stuPwd='$upDatePW' where stuID='$username'";
		mysql_query($sql);
	}
	if($upDateDay!="")
	{
		$sql="update studentinfor set stuBirth='$upDateDay' where stuID='$username'";
		mysql_query($sql);
	}
	if($upDateYX!="")
	{
		$sql="update studentinfor set stuYX='$upDateYX' where stuID='$username'";
		mysql_query($sql);
	}
	if($upDateTell!="")
	{
		$sql="update studentinfor set stuTel='$upDateTell' where stuID='$username'";
		mysql_query($sql);
	}
	echo "修改成功";
	
}
else 
{
    
    
    $username=$_SESSION["username"];
    echo  "<body style='background-image: url(img/公告.jpg); background-repeat: no-repeat;background-size: cover;'>";
	echo "<form method='post'>";
	
	$query = "SELECT * FROM studentinfor where stuID='$username'";
	$result = mysql_query($query);
	
	$row = mysql_fetch_array($result);
	
	//echo "名字:".$row['stuName']."性别:".$row['stuSex']."生日:".$row['stuBirth']."电话:".$row['stuTel']."邮箱:".$row['stuYX']."系部:".$row['stuPro']."班级:".$row['stuClass']."院校:".$row['xueyuan'];

	echo "<div style='margin-left:620px;'>";
	echo "<h1 style='align:center;margin-left:20px;'>修改密码</h1>";
	
	echo "<br>";
	echo "<input type='text' value='$username' disabled='disabled'style='width:180px;height:30px;margin-bottom:20px;'>";
	echo "<br>";
	
	echo "<input type='text' name='upDatePW' placeholder='修改密码'/style='width:180px;height:30px;margin-bottom:20px;'>";
	echo "<br>";
	echo "<input type='text' name='upDateDay' placeholder='修改生日 0000-00-00'style='width:180px;height:30px;margin-bottom:20px;'/>";
	echo "<br>";
	echo "<input type='text' name='upDateYX' placeholder='修改邮箱'style='width:180px;height:30px;margin-bottom:20px;'/>";
	echo "<br>";
	echo "<input type='text' name='upDateTell' placeholder='修改电话'style='width:180px;height:30px;margin-bottom:20px;'/>";
	echo "<br>";
	echo "<input type='submit' name='submit' value='提交'style='width:180px;height:30px;margin-bottom:20px;'/>";
	echo "<br>";
	echo "<a href='Background.php' style='text-decoration: none;'>个人中心</a>";
	
	echo "</form>";
	echo "</div>";
	echo "</body>";
}

?>

























