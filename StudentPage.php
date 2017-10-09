

<?php 
session_start();

@$username=$_SESSION["username"];
@$IdCard=$_SESSION["IdCard"];

if(!isset($username)){
    header("location:HomePage.php");
}if(@$IdCard!="学生"){
    header("location.Homepage.php");
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>学科竞赛管理系统</title>
	<link rel="stylesheet" href="css/TeacherPage.css" >    
	<style type="text/css">
		
		input{
			height: 30px;
			width: 200px;
			margin-top: 0px;
	   	    margin-left: 10px;
			background-color:#0C4068;
			float:right;
			color: white;
			text-align:left;
			font-size:20px;
			border:none;	
		}
			
	</style>
	
	<script type="text/javascript" src="js/TeacherPage.js">


</script>
	</head>
	<body style="margin: 0;">
	
		<div id="main" >
		
			<div id="top">
				<div id="top_left">
        				<div id="iron"   style="background-image:url(img/school.png);">
        				
        				</div>
        				
        				<div id="title">
				                <div id="title_top">学科竞赛管理系统
				
				                </div>
				                <div id="title_buttom">Discipline competition management system
				
				                 </div>
				       </div>
        				
				</div>
				
				<div id="top_right">
				
				        <div id="top_right_right"style="margin-right:0px;">
				
				                <div id="top_right_right_top"style="margin-right:25px;float:right; ">
				                <a href="HomePage.php"style="text-decoration: none;">首页</a>
				               <a href="Login.php"style="text-decoration: none;">退出</a>
				          <a href="PersonalCenter.php"style="text-decoration: none;">个人中心</a># 帮助 
				          
				                </div>
				
				                <div id="top_right_right_buttom"><input type="text" value="You Believe Us">
				                </div>
				
				
				        </div>
				
				        <div id="top_right_left">
				
				
				        </div>
				        
				
				
				</div>
				
				
			</div>
			
			<div id="buttom">
				<div id="inner_left">
				    <div id="inner_left_top">功能菜单
				    </div>
				     <div id="inner_left_buttom">
				        
				        <div   class="inner" onclick="change_1();">  竞赛报名
				        </div>
				        <div  class="inner_1" onclick="window.location.href='SteamAdd.php'">组队
				       </div>
				       <div  class="inner_1" onclick="window.location.href='Smyteam.php'">我的队伍
				       </div>
				        <div  class="inner_1" onclick="window.location.href='SapplyAdd.php'">报名申请
				       </div>
				        <div class="inner" onclick="change_2();">已选竞赛
				       </div>
				       <div  class="inner_2">计算机设计大赛
				       </div>
				       <div  class="inner_2">软件杯大赛
				       </div>
				       <div class="inner" onclick="change_3();">未选比赛
				       </div>
				       
				       <div  class="inner_3">互联网+
				       </div>
				       <div class="inner" onclick="change_4();">基本信息
				       </div>
				        <div  class="inner_4" onclick="window.location.href='SstuList2.php'">学生信息
				        </div>
				       <div  class="inner_4" onclick="window.location.href='SteaList2.php'">老师信息
				       </div>
				        <div  class="inner_4" onclick="window.location.href='SmanList.php'">管理员信息
				       </div>
				      
				       <div class="inner" onclick="change_5();">竞赛信息
				       </div>
				       <div  class="inner_5" onclick="window.location.href='ScomList2.php'">赛事信息</div>
				       <div  class="inner_5" onclick="window.location.href='SapplyList2.php'">报名信息</div>
				       <div  class="inner_5" onclick="window.location.href='SteamList2.php'">团队信息</div>
				       <div  class="inner_5" onclick="window.location.href='SconList2.php'">报名结果</div>
				       
				       </div>
				    </div>
				</div>
				<div id="inner_right">
					<div id="inner_right_top">
					<br/>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当前位置：学生界面
					</div>
					<div id="inner_right_buttom">
					
					    <div class="inner2" >
					  软件杯报名详情
				       </div>
				        <div class="inner2">
				       
				        大学生程序设计大赛报名详情
				       </div>
				        <div class="inner2">挑战杯报名详情
				       </div>
			
					</div>
		
		    </div>
		</div>
		</div>
	</body>
</html>
