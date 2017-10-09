<?php 

session_start();
@$username=$_SESSION["username"];
@$IdCard=$_SESSION["IdCard"];
                
        include 'MySqlAdmin.php';
        mysql_query("SET NAMES 'utf8'");
         
        $query="select noticeID,noticeName,noticeTime from notice";
        $result=mysql_query($query);
				         
				    ?>
			         
<html>
<style type="text/css">
            body{
	             padding:0;
	            margin:0;
	
            }
			
	        #title:hover {
		
		       font-size:150%;
		       background:#87CEFA;
	         }							


	        #title {
	        	//border-radius:5px;
			background:#8DB6CD;
			width: 100%;
			height: 60px;
	        margin-bottom:0px;
	        margin-right:0px;
	        	
			}
			#title img {
			margin-left: 550px;
			}
			#title-left {
			float: left;
			}
			#title-right {
				width:320px;
			float: right;
			font-size: 24px;
			font-weight:bold;
			font-family:"华文行楷";
			margin-right: 500px;
			margin-top:0px;
			}
			#title-right marquee{
	margin-top:12px;
			}
			
			#left{
			
			margin-top:0px;
		    margin-left:0px;
			float:left;
            width:10%;
			height:1000px;
			//background:#C6E2FF;
		   // background:dodgerblue;	
			background:		#BCD2EE;
				//border-radius:3px;
		     
				
			}
			#right{
	        margin-top:0px;
		    float:right;
			width:90%;
		    height:1000px;
			padding-top:0px;
			padding-left:0px;
				background:	#D1EEEE;
		
			}
			#right-top{
			margin-top:0px;
			margin-left:0px;
            width:100%;
			height:70px;
			//background: deepskyblue;
			border:1px white solid;
			
			}
			#right-bottom{
	        margin-top:0px;
			width:99%;
		
			}

			ul li{
				line-height:50px;
            	list-style:none;
			}
			a{
	         text-decoration: none;
			 color:black;
			 font-style: oblique;
			 font-size: large;	
			}
			a:link{
	         color:black;
			}
			a:visited{
	        color:purple;
			}
			a:hover{
				font-size:150%;
	        color:red;
			}

</style>
<head>
</head>
<body>
<form action="DeleteGao.php"method="get">


			<div id="title">
				<div id=title-left>

					<a href="http://www.ahpumec.edu.cn/"><img src="img/school.png" /></a>
				</div>
				<div id=title-right>
					<marquee>安徽信息工程学院学科竞赛管理系统</marquee>

				</div>
			</div>

				<div id="left" align="center">
				<h2 style="font-family: arial">导航菜单</h2>
				
				<ul>
				        <li><a href="HomePage.php"target="parent" style="border-right:1px solid color;">网站首页</a></li>			       
						<li><a href="NewsCenter.php">新闻中心</a></li>
						<li><a href="Announce.php">通知公告</a></li>
						<li><a href="Mannger.php">管理规定</a></li>
						<li><a href="ContestsProject.php">竞赛项目</a></li>
						<li><a href="CompetitionResult.php">竞赛成果</a></li>
						<li><a href="newfile.php">文件下载</a></li>
						<li><a href="ContactUs.php">联系我们</a></li>
						<li><a href="FriendLink.php">友情链接</a></li>
						<li><a href="UsingHelp.php">使用帮助</a></li>
					    <li><a href="Login.php">用户登陆</a></li>	
				</ul>	
				</div>
				<div id="right">
				   <div id="right-top">
				      <h3>学科竞赛系统通知公告</h3>
				   </div>
				   <div id="right-bottom" align="left">

				           <?php 
				         
				         
				         while (($row=mysql_fetch_array($result))!=false){
				             echo "<div>";
				             echo "<br/>";
				             echo "<div style='float:left;margin-left:20px;'>";
				             echo "<a href='AnnouncementDisplay.php?noticeID=$row[noticeID]' target='_blank'>".$row['noticeID']."、".$row['noticeName']."</a>";
				             echo "&nbsp;&nbsp;&nbsp;&nbsp;";
				             echo "</div>";
				             echo "<div style='float:right;'>";
				             echo $row['noticeTime'];
				             echo "</div>";
				             echo "<div>";
				   
				             echo "<a href='AlterGao.php?noticeName=$row[noticeName]'>修改</a>";
				             echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				             echo "<a href='DeleteGao.php?noticeTime=$row[noticeTime]'>删除</a>";
				             echo "</div>";
				             echo "</div>";
				             echo "<br/>";
				             echo "<hr/>";
				             echo "<br/>";
				             
				         }
				         ?>
				     
			       </div>
			       </div>
			       </form>
			

</body>
</html>
