<html>
<style>
body{
	padding:0;
	margin:0;
	
}
#wrap{
	width:100%;
	height:100%;
}



 						/* 已访问的链接 */
	#title:hover {
		
		font-size:150%;
		background:#87CEFA;
	}							/* 鼠标移动到链接上 */


	#title {
			background: #8DB6CD;
			width: 100%;
			height: 60px;
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
				font-size: 16px;
			font-weight:bold;
				font-family:"宋体";
			
			margin-top:0px;
		    margin-left:0px;
			float:left;
            width:10%;
			height:800px;	
				background:#BCD2EE;
			}
			#right{
			margin-top:0px;
            width:90%;
			float:right;
				//background:	#B4CDCD;
				height:800px;	
			background:#D1EEEE;
					
			}

			ul li{
				line-height:35px;
            	list-style:none;
			}
			ul li a{
					line-height:50px;
            	list-style:none;
	text-decoration:none;
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
<div id="wrap">
			<div id="title">
				<div id=title-left>

					<a href="http://www.ahpumec.edu.cn/"><img src="img/school.png" /></a>
				</div>
				<div id=title-right>
					<marquee>安徽信息工程学院学科竞赛管理系</marquee>

				</div>
			</div>

				<div id="left">
				<h3>导航菜单</h3>
				
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
				<h3>学科竞赛成果相关列表</h3>
				<hr/>
				
				
				<video width="1200px" height="800px"style="margin-left:0px;" controls>
  <source src="video/movie.mp4" type="video/mp4">


</video>
				
				</div>
			</div>

</body>
</html>