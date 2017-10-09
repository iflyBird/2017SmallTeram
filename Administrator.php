
<?php 
session_start();
$username=$_SESSION["username"];
$IdCard=$_SESSION["IdCard"];

if(!isset($username)){
    header("location:HomePage.php");
}if($IdCard!="管理员"){
    header("location:Homepage.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>学科竞赛管理系统</title>
	        <link rel="stylesheet" href="css/TeacherPage.css" >   
	       
	       <script type="text/javascript" src="js/TeacherPage.js">

	    		       
          </script> 
	</head>
	<body style="margin: 0; background:#E0EEE0">
		<div id="main">
		
			<div id="top">
				<div id="top_left">
        				<div id="iron"style="background-image:url(img/school.png);" >
        				
        				
        				</div>
        				
        				<div id="title">
				                <div id="title_top">学科竞赛管理系统
				
				                </div>
				                <div id="title_buttom">Discipline competition management system
				
				                 </div>
				       </div>
        				
				</div>
				
				<div id="top_right">
				
				        <div id="top_right_right">
				 
				
				                <div id="top_right_right_top"># 帮助  |关于|<a href="Login.php">退出</a>
				                       <a href="HomePage.php"style="text-decoration: none">首页</a>
				                </div>
				
				                <div id="top_right_right_buttom"><input type="text" value="You　ＢELIEVE Us">
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
				        
				        <div class="inner" onclick="change_1();">通知公告
				        </div>
				        <div class="inner_1"><a href="ueditor1.php"target="content"style="text-decoration: none">发布公告</a>
				       </div>
				       <div class="inner_1"><a href="DeleteGao.php"target="content"style="text-decoration: none">删除公告</a>
				       </div>
				       <div class="inner_1"><a href="DeleteGao.php"target="content"style="text-decoration: none">修改公告</a>
				       </div>
				       <div class="inner_1"><a href="Announce.php"target="content"style="text-decoration: none">查看公告</a>
				       </div>
				        <div class="inner" onclick="change_2();">新闻中心
				       </div>
				       <div class="inner_2"><a href="NewsCenter.php"target="content"style="text-decoration: none">查看新闻</a>
				       </div>
				        <div class="inner_2"><a href="ueditor.php"target="content"style="text-decoration: none">发布新闻</a>
				       </div>
				       <div class="inner" onclick="change_3();">下载文件
				       </div>
				       
				       <div class="inner_3">
				       <a href="newfile.php"target="content"style="text-decoration: none">下载文件</a><br/>
				        <a href="xiazai.php"target="content"style="text-decoration: none">上传文件</a>
				       
				       </div>
				       <div class="inner" onclick="change_4();">发布比赛
				       </div>
				       <div class="inner_4"><a href="ueditor.php"target="content"style="text-decoration: none">发布比赛</a>
				       </div>
				       
				       
				       
				       
				       <div class="inner" onclick="change_5();">赛事情况
				       </div>
				       
				        <div  class="inner_5" onclick="window.location.href='AcomList1.php'">赛事信息</div>
				       <div  class="inner_5" onclick="window.location.href='AapplyList1.php'">报名信息</div>
				       <div  class="inner_5" onclick="window.location.href='AteamList1.php'">团队信息</div>
				       <div  class="inner_5" onclick="window.location.href='AconList1.php'">赛事结果</div>
				       
				       <div class="inner" onclick="change_6();">基本信息
				       </div>
				       <div  class="inner_6" onclick="window.location.href='AstuList1.php'">学生信息
				        </div>
				       <div  class="inner_6" onclick="window.location.href='AteaList1.php'">老师信息
				       </div>
				        <div  class="inner_6" onclick="window.location.href='AmanList.php'">管理员信息
				       </div>
				       <div  class="inner_6" onclick="window.location.href='chakan.php'">查看用户反馈
				       </div>
				       
				       
				       
				       
				       
				    </div>
				</div>
				<div id="inner_right">
					<div id="inner_right_top">
					<br/>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当前位置：管理员界面
						
					</div>
					<div>
					<iframe frameborder=0 name="content" style="width:1000px;height:1100px;" SCROLLING="NO">
					</iframe>
					
	
					</div>
					
						
		       </div>
		    </div>
		</div>
	</body>
</html>
