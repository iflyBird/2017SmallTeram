<?php 

session_start();
$username=$_SESSION["username"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>个人中心</title>
	<style>
		span
		{
			font-size:16px
		}
		.divcss1
		{width: 100%;height:50px ;float:top;}
		.divcss2
		{width: 400px;height:350px;float: top;margin:30px auto;background-color: #000;background-color:rgba(0,0,0,0.15);}
		.divcss3
		{width: 100px;height: 100px;float: top;border:2px gold solid;margin: 20px auto;overflow:hidden;border-radius:100px;}
		.divcss4
		{width: 200px;height: 50px;float: top;margin:-10px  480px auto;}
		.divcss5
		{width: 30px;height: 30px;float: left;margin:0 3px auto;overflow:hidden;border-radius:30px;}
	</style>
</head>
<body background="img/2.jpg" style="background-repeat:no-repeat ;background-size:100% 100%; background-attachment:fixed;">
	<div class="divcss1">
		<h1 align="center" style="color:white ">个人中心</h1>
		
	</div>
	<div class="divcss2">
		<div class="divcss3">
		<a href="Background.php"><img src="img/1.jpg" width="99px;"height="99px"></a>
		</div>
		<p align="center" style="color:white;font-size:28px;">Mr.zhang<br/>
		<span>Enter here</span></p>
		<p align="center" style="color:white;font-size:28px;">用户名:<?php echo $username?></p>
		<p align="center" style="color:white;font-size:28px;" >
			      
		<a href="Background.php"style="text-decoration:none;color:white;">修改</a>
		</p>
	</div>
	<div class= "divcss4">
		<div class="divcss5">
			<a href="http://www.weibo.com/" >
			<img src="img/weibo.jpg"width="30px;"height="30px" /></a>
			</div>
		<div class="divcss5">
			<a href="https://user.qzone.qq.com/1440682157?ptlang=2052&source=aiostar/ 

" >
			<img src="img/Qzone.jpg"width="30px;"height="30px" /></a>
			</div>
	</div>
</body>
</html>
