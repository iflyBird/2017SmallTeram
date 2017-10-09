<?php 
       include 'MySqlAdmin.php';
       mysql_query("SET NAMES 'utf8'");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>报名</title>
		<style type="text/css">
			.p{
				color: white; 
				margin-bottom: 0px;
			}
			.INPUT{
				width: 300px;
				height: 30px;
				border-radius:15px 15px 15px 15px;
			}
			
			#Maxdiv{
			border-radius:20px 20px 20px 20px;
			background-color:black;
			width: 450px;
			height: 670px;
			margin-left: 530px;
			}
			#Submit{
				height:30px;
				background-color: green; 
				margin-top: 30px; 
				width: 200px;
				border-radius:15px 15px 15px 15px;
			}
		</style>
	</head>
	<body background="img/3.jpg" style="background-repeat:no-repeat ;background-size:100% 100%; background-attachment:fixed;">
		
		<div style="width: 100%;padding-right: 0px;">
			<input type="button"name="主页"value="主页"onclick="#">&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="button" name="返回"value="返回"onclick="#">
			
		</div>
		<br />
		<br />
		
		
		<form action="" method="get">
		<div id="Maxdiv" align="center" >
			<br />
			<h2 style="color: white; ">ACM程序设计大赛报名表</h2>
			<hr />
			<br />
			<p class="p" >小组名称</p>
            <div >
            	<input class="INPUT" type="text" name="小组名称" placeholder="请输入小组名称">
            </div>
            <p class="p" >项目名称</p>
            <div>
            	<input class="INPUT" type="text" name="项目名称" placeholder="请输入项目名称">
            </div>
            <p class="p" >组长学号</p>
            <div>
            	<input class="INPUT"type="text" name="组长学号"  placeholder="请输入组长学号">
            </div>
            <p class="p" >成员1学号</p>
            <div>
            	<input class="INPUT"type="text" name="成员1学号" placeholder="请输入成员学号">
            </div>
            <p class="p" >成员2学号</p>
            <div>
            	<input class="INPUT"type="text" name="成员2学号" placeholder="请输入成员学号">
            </div>
            <p class="p" >成员3学号</p>
            <div>
            	<input class="INPUT"type="text" name="成员3学号" placeholder="请输入成员学号">
            </div>
            <input id="Submit" type="submit" name="报名" value="报&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名">
		</div>
		</form>
	</body>
</html>