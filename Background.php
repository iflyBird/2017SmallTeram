<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Title</title>
		<style>
		body{
			background:#F0F8FF;
				
		}
			         *{
			          padding:0;
			          margin:0;
			        }
			        #title{
			        	width:1600px;
			            background:#FFE4E1;
			            height:40px;
			           
			        }
			        #wrap{
			        	
			        	height:800px;
			        	width:1600px;
			        
			        	margin-top:0px;
			        }
			        ul li {
			            margin-left: 20px;
			
			            display: inline;
			            list-style: none;
			            float:left;
			
			        }
			        ul li a{
			        	text-align:center;
			        
			            font-size: 24px;
			
			            text-decoration:none;
			        }
			        #content-left{
			            float:left;
			        	
			  
			        	width:200px;
			        	height:800px;
			        	
			        }
			     #content-right{
		
			        	height:800px;
			        }
			       #content-left-top{
			        
			        	width:200px;
			        	height:200px;
			        }
			         #content-left-bottom{
			         
			        	width:200px;
			        	height:600px;
			        }
			         #content-left-bottom-left{
			         	float: left;
			         	width:50px;
			         	height:600px;
			         	margin-left：0px;
			         }
			          #content-left-bottom-right{
			          	float:right;
			         	width:150px;
			         	height:600px;
			         }
			         #content-left-bottom-right ul a{
			         	line-height:60px;
			         	
			         }
			          #content-left-bottom-left ul li{
	line-height:55px;
			          }
a:link{
	         color:black;
			}
			a:visited{
	        color:purple;
			}
		#title ul li a:hover{
			font-size:150%;
	        color:red;
			}
			#content-left-bottom-right hover{
				font-size:150%;
				color:red;
}
				.transform{

       
            -webkit-transition: -webkit-transform 0.2s ease-out;
            -moz-transition: -moz-transform 0.2s ease-out;
            -o-transition: -o-transform 0.2s ease-out;
            -ms-transition: -ms-transform 0.2s ease-out;
				
				
			}
			.transform:hover{
				  -webkit-transform: rotateZ(270deg);
            -moz-transform: rotateZ(270deg);
            -o-transform: rotateZ(270deg);
            -ms-transform: rotateZ(270deg);
            transform: rotateZ(270deg);
											
			}
							
		</style>
	
      
      <script type="text/javascript"> 
      //此种方式降低了js和CSS的耦合性 
    //  function changeFontSize(fontStyle){ 
      // 获取节点对象 
     // var divNode = document.getElementsByTagName("a")[0]; 
      // 设置该节点的Name属性以及属性值 
     // divNode.className=fontSize; 
     // } 
      /* 
      function changeFontSize2(fontSize){ 
      // 获取节点对象 
      var divNode = document.getElementsByTagName("div")[0]; 
      divNode.style.fontSize=fontSize; 
      } 
     // */ //function start(){
     // document.getElementById('font').innerText='48px';
    //  }

		</script>
	</head>

	<body>
		<div id="title">
			<ul>
				<li><a href="#" style="margin-left:40px">个人中心</a> </li>
				<li><a href="#"style="margin-left:10px">我的资料</a> </li>
				<li><a href="http://www.ahpumec.edu.cn/"style="margin-left:700px">学校官网</a> </li>
				<li><a href="text16.php">注册</a> </li>
				<li><a href="Login.php">登陆</a> </li>

			</ul>

		</div>
		<div id="wrap">
			<div id="content-left">
				<div id="content-left-top">
					<img src="img/人物.jpg" style="width:190px;height:200px; border-radius:100%;"class='transform'/>

				</div>
				<div id="content-left-bottom">
					<div id="content-left-bottom-left">
						<ul>
							<li><img src="img/我的首页 (3).png" width="40px" height="40px;"class="transform"></li>
							<li><img src="img/账号设置.png" width="40px" height="40px;"class='transform'></li>
							<li><img src="img/我的资料.png" width="40px" height="40px;"class='transform'></li>
							<li><img src="img/消息中心.png" width="40px" height="40px;"class='transform'></li>
							<li><img src="img/修改密码.png" width="40px" height="40px;"class='transform'></li>
							<li><img src="img/退出.png" width="40px" height="40px;" style="margin-top:5px;"class='transform'></li>
						</ul>

					</div>
					<div id="content-left-bottom-right">
						<ul>
							<li><a href="HomePage.php"id="font"class='transform' >我的首页</a></li>
							<li><a href="#"class='transform'>账号设置</a></li>
							<li><a href="#" class='transform'>我的资料</a></li>
							<li><a href="#"class='transform'>消息中心</a></li>
							<li><a href="AlterPassword.php"target="content"class='transform'>修改密码</a></li>
							<li><a href="Login.php"class='transform'>账号退出</a></li>
						

						</ul>
					</div>

				</div>

			</div>
			<div id="content-right">

				<strong style="font-size: 32px;">猜你喜欢</strong>
				<hr />

				<iframe frameborder=0 name="content" style="width:1400px;height:600px;" SCROLLING="NO"></iframe>

			</div>

		</div>

	</body>

</html>