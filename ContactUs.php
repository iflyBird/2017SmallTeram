
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
#title hover{
	 font-size:150%;
	 background:#87CEFA;
	
}
#title {
			background:#8DB6CD;
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
				font-family:"宋体";
				font-size:16px;
			margin-top:0px;
		    margin-left:0px;
			float:left;
            width:10%;
			height:800px;		
				background:	#BCD2EE;	
			}
			#right{
					height:800px;	
			margin-top:0px;
            width:90%;
			float:right;
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
			#content{
				width:1000Px;
				height:400px;
				margin-left:160px;
				margin-top:110px;
			}
			img{
				width:120px;
				height:120px;
			}
			table{
				
				border-spacing:20px 30px;
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
			.transform{
	// -webkit-border-radius: 110px;
          //  border-radius: 110px;
            -webkit-transition: -webkit-transform 0.2s ease-out;
            -moz-transition: -moz-transform 0.2s ease-out;
            -o-transition: -o-transform 0.2s ease-out;
            -ms-transition: -ms-transform 0.2s ease-out;
				
				
			}
			.transform:hover{
				  -webkit-transform: rotateZ(180deg);
            -moz-transform: rotateZ(180deg);
            -o-transform: rotateZ(180deg);
            -ms-transform: rotateZ(180deg);
            transform: rotateZ(180deg);
	
				
				
				
			}
			

</style>
<head>
</head>
<body>
<div id="wrap">
			<div id="title">
				<div id=title-left>

					<img src="img/school.png" style="width:60px;height: 60px; margin-left: 550px;"/>
				</div>
				<div id=title-right>
					<marquee>安徽信息工程学院学科竞赛管理系统</marquee>

				</div>
			</div>

				<div id="left">
				<h3>导航菜单</h3>
				
				<ul>
				        <li><a href="HomePage.php"	style="border-right:1px solid color;">网站首页</a></li>			       
						<li><a href="NewsCenter.php">新闻中心</a></li>
						<li><a href="Announce.php">通知公告</a></li>
						<li><a href="Mannger.php">管理规定</a></li>
						<li><a href="contestsProject.php">竞赛项目</a></li>
						<li><a href="CompetitionResult.php">竞赛成果</a></li>
						<li><a href="newfile.php">文件下载</a></li>
						<li><a href="ContactUs.php">联系我们</a></li>
						<li><a href="FriendLink.php">友情链接</a></li>
						<li><a href="UsingHelp.php">使用帮助</a></li>
					    <li><a href="Login.php">用户登陆</a></li>	
				</ul>	
				</div>
				<div id="right">
				<h2>Contact Us</h2>
				<hr/>
				<div id="content">
				<table >
				<tr>
				<td><img src="img/zhangxing.jpg"class='transform' ></td>
				<td><p></p><p>姓名：张兴</p><p>职务：组长</p><p>邮箱：xxx@qq.com</p><br></td>
                <td><img src="img/zhan.jpg"class='transform' ></td>
				<td><p></p><p>姓名：占承展</p><p>职务：组员</p><p>邮箱：xxx@qq.com</p><br></td>
               <td><img src="img/zheng.jpg"class='transform' ></td>
			    <td><p></p><p>姓名：郑小禹</p><p>职务：组员</p><p>邮箱：xxx@qq.com</p><br></td>
				</tr>
				<tr>
				<td><img src="img/xiajuan.jpg" class='transform' ></td>
				<td><p></p><p>姓名：夏娟</p><p>职务：组员</p><p>邮箱：xxx@qq.com</p><br></td>	
				<td><img src="img/wu.jpg" class='transform'></td>
				<td><p></p><p>姓名：吴慎华</p><p>职务：组员</p><p>邮箱：xxx@qq.com</p><br></td>
				<td><img src="img/yan.jpg" class='transform' ></td>
				<td><p></p><p>姓名：闫波涛</p><p>职务：组员</p><p>邮箱：xxx@qq.com</p><br></td>
				</tr>
				</table>
				</div>
				
				</div>
			</div>

</body>
</html>
