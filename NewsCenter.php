<?php 
                         include 'MySqlAdmin.php';
				         mysql_query("SET NAMES 'utf8'");
				         
				         $query="select newsID,newsName from news";
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
			margin-right: 460px;
			margin-top:4px;
			}
			#title-right marquee{
				margin-top:0px;

			}
			
			
			#left{
			
			margin-top:0px;
		    margin-left:0px;
			float:left;
            width:10%;
			height:1000px;
		   // background:dodgerblue;
					background:#BCD2EE;	
				
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
			background:;
			border:1px white solid;
			
			}
			#right-bottom{
	        margin-top:0px;
			width:99%;
		  
			}

			ul li{
				line-height:60px;
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
	        color:blue;
			}
			a:hover{
				font-size:150%;
	        color:red;
			}

</style>
<head>
</head>
<body>

			<div id="title">
				<div id=title-left>

					<a href="http://www.ahpumec.edu.cn/"><img src="img/school.png" /></a>
				</div>
				<div id=title-right>
					<marquee>安徽信息工程学院学科竞赛管理系</marquee>

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
				      <h3>学科竞赛系统新闻中心</h3>
				   </div>
				   <div id="right-bottom" align="center">
				         <?php 
				         
				         
				         while (($row=mysql_fetch_array($result))!=false){
				             echo "<br/>";
				             echo "<a href='newsDisplay.php?newsID=$row[newsID]' target='_blank'>".$row['newsID']."、".$row['newsName']."</a>";
				             echo "<br/>";
				             echo "<hr/>";
				             echo "<br/>";
				            
				             
				         }
				         ?>
			       </div>
				</div>

</body>
</html>