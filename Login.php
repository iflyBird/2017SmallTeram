<?php 
session_start();
session_unset();
session_destroy();
             include 'MySqlAdmin.php';
	         mysql_query("SET NAMES 'utf8'");
	         
	         $query="select noticeID,noticeName,noticeTime from notice";
	         $result=mysql_query($query);
	         
	         ?>
<!DOCTYPE html>
<html>
<head>
	<title>登录页面</title>	
	
<link href="css/LoginScreen.css" rel="stylesheet" type="text/css" />
<style>

#shenfen{
	background-image:url(img/用户.png);
	background-repeat:no-repeat;
	background-size:30px,10px;
	background-position:left center;
	padding: 5px 30px 5px 27px;
	background-color: ;
	opacity: 0.5;   
	
}
#password{
	background-image:url(img/密码.png);
	background-repeat:no-repeat;
	background-size:27px,10px;
	background-position:left center;
	padding: 5px 30px 5px 27px;
	background-color: ;
	opacity: 0.5;   
}
#admin{
	background-image:url(img/用户.png);
	background-repeat:no-repeat;
	background-size:30px,10px;
	background-position:left center;
	padding: 5px 30px 5px 27px;
	background-color: ;
	opacity: 0.5;   
	
}
#content{

	float:left;
	width:40%;
}
#login{
	width:60%;
	
	float:right;
}
#content ul li{
	line-height:40px;
	margin-left:240px;
	   
}
#content ul li a{
   text-decoration:none;
	font-size:24px;
}

</style>

<script type="text/javascript" src="js/Login.js">

</script>	
</head>
<body style="background-image: url(img/background.jpg); background-repeat: no-repeat;background-size: cover;">
<div style="margin:0px auto;width:400px;height:50px;font-family:'华文行楷';font-size:32px;font-weight:bold;"><marquee>学科竞赛管理系统	</marquee></div>
<h3 style="margin-top:-20px;">竞赛通知</h3>
<hr/>


<div style="margin-top:0px;"><img alt="Mymouse" src="img/Mymouse.gif"></div>

<div id="content">

   <?php 
				         	         
     while (($row=mysql_fetch_array($result))!=false){
             echo "<div>";
             echo "<br/>";
             echo "<div style='float:left;margin-left:20px;'>";
             echo "<a href='AnnouncementDisplay.php?noticeID=$row[noticeID]' >".$row['noticeID']."、".$row['noticeName']."</a>";
             echo "&nbsp;&nbsp;&nbsp;&nbsp;";
             echo "</div>";
             echo "<div style='float:right;'>";
             echo $row['noticeTime'];
             echo "</div>";
             echo "</div>";
             echo "<br/>";
        
         }
         ?>
</div>
<div id="login">
	
	<form action="LoginAction.php" method="post">

	<!--------------------正文标题-------------------->
	<h2 align="center">用户登录</h2>
	
	<input type="hidden" name="compId" value="用户登录" />
	
	<!-------------------- 跳转注册页面 -------------------->
	<p align="center">
		没有账号？<a href ="text16.php" style="color: black;font-size:24px;">注册</a>
	</p>
	
	<!--------------------功能-------------------->
	<!-- 用户账户-->
	<p align="center">
		<input type="text" name="IdCard" list="url_list" id="shenfen" placeholder="身份" />
	</p>

    	 <datalist id="url_list"style="border: none;">
        
        <option label="" value="教师"  style="font-size:24px;" />
         <option label="" value="管理员"style="font-size:24px;" />
         <option label="" value="学生" style="font-size:24px;"/>
         <option label="" value="非在校学生" style="font-size:24px;"/>
         
        </datalist>
	<p align="center">
		<input type="text" name="admin" id="admin"placeholder="Username"/>
	</p>

	<!-- 用户密码-->
	<p align="center">
			<input type="password" name="password" id="password"placeholder="Password" />
	</p>
	
	<div id="yanzhengma" style="float:right;margin-right:280px;margin-top:4px;">
	<img src="yanzhengma.php" onclick="javascript:this.src='yanzhengma.php?tm='+Math.random()">
	</div>

	<div id="shuru"style="float:right;margin-right:24px;margin-top:4px;">
 <input type="text" name="Code" id="Code"placeholder="请输入验证码"style="opacity: 0.5;width: 200px;height:48px;float:right;"/>
	</div>
	
	
	<!--------------------按键--------------------
	<!-- 1、确定登录 -->
     
      <div style="margin-right:526px;margin-top:20px;float:right;">
		<input type="submit"id="denglu" name="登录" value="登录" onclick="return read()" style="width:60px;height:40px;background:white;color:#B1D2EC;"/>
		</div>
	<!-- 2、重置按钮 --><div style="margin-right:400px;float:right;margin-top:-40px;">
		<input type="button" id="shuaxin"onclick="javascript:window.location.reload() " style="width:60px;height:40px;background:white;color:#B1D2EC;"value="重置"/>
		</div>
		
</form>
</div>

</body>
</html>