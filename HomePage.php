
<?php 
session_start();

@$username=$_SESSION["username"];

if(!isset($username)){
  header("location:Login.php");
}
             include 'MySqlAdmin.php';
	         mysql_query("SET NAMES 'utf8'");     
	         $query="select noticeID,noticeName,noticeTime from notice";
	         $result=mysql_query($query);
	         
	         ?>

<!DOCTYPE html >
	  <html >
<head>
<meta />
<title></title>
</head>


<style >
body{
	padding:0;
	margin:0;
}

img{border:0;}
#title {
	background:#C6E2FF;
			
				width: 100%;
				height: 60px;
			}
			#title img {
			
				margin-left: 500px;
			}
			#title-left {
				float: left;
					height:30px;
			}
			#title-right {
				width:320px;
				
				float: right;
				font-family:"华文行楷";
				font-size: 28px;
				font-weight:bold;
				
				margin-right:550px;
				margin-top:5px;
				height:30px;
			}
           ul{
           		list-style:none;
			
				width:1200px;
				 height:auto; 
				 margin:0 auto;
			}
           #title-second {
	            background:#C6E2FF;
			
				height: 50px;
			}
			ul li {
				 width:100px; 
				 float:left;
				 text-align:center;
				list-style:none;
			
			}
			ul li a{
				text-decoration:none;
				font-size:18px;
				color:blue;
			    list-style:none;
	
			}
        li{list-style:none;}
        a:hover{
	         color:#836FFF;
        	font-size:150%;
        }

.user_callback #user_pic{position:relative;
        overflow:hidden;height:450px;
        width:1200px;z-index:2;margin:0 auto;
}
.user_callback #user_pic ul{width:990px;
height:285px;
position:relative;
top:20px;left:105px;
}
.user_callback #user_pic ul li{
position:absolute;
}
.user_callback #user_pic ul img{
position:relative;
top:0;
left:0;
}

.user_callback #user_pic ul .user_pic1{top:-285px;
left:-231px;
z-index:0;
}
.user_callback #user_pic ul .user_pic2{top:-23px;
left: -99.5px;
z-index:2;
}
.user_callback #user_pic ul .user_pic3{top: 66px;
left: 68px;
z-index:3;
}
.user_callback #user_pic ul .user_pic4{top:110px;
left:247.5px;
z-index:4;
}
.user_callback #user_pic ul .user_pic5{top:110px;
left:495px;
z-index:3;
}
.user_callback #user_pic ul .user_pic6{
top:66px;
left:695.5px;
z-index:2;
}
.user_callback #user_pic ul .user_pic7{
top:-23px;
left:852px;
z-index:1;
}
.user_callback #user_pic ul .user_pic8{top:-285px;
left:1000px;
z-index:0;
}

.user_callback #user_pic ul .user_pic1 a{
width:216.5px;
height:248px;
}
.user_callback #user_pic ul .user_pic2 a{
width:225.5px;
height:259px;
}
.user_callback #user_pic ul .user_pic3 a{
width:247.5px;
height:285px;
}
.user_callback #user_pic ul .user_pic4 a{
width:247.5px;
height:285px;
}
.user_callback #user_pic ul .user_pic5 a{
width:247.5px;
height:285px;
}
.user_callback #user_pic ul .user_pic6 a{
width:247.5px;
height:285px;
}
.user_callback #user_pic ul .user_pic7 a{
width:225.5px;
height:259px;
}
.user_callback #user_pic ul .user_pic8 a{
width:216.5px;
height:248px;
}


.user_callback #user_pic ul li:hover{background:#d9bb83;}

.user_callback #user_pic ul li.user_pic1{
        opacity:0.2;filter:alpha(opacity:20);
}
.user_callback #user_pic ul li.user_pic2{
        opacity:0.6;filter:alpha(opacity:60);
}
.user_callback #user_pic ul li.user_pic3{
        opacity:0.8;filter:alpha(opacity:80);
}
.user_callback #user_pic ul li.user_pic4{
        opacity:1;filter:alpha(opacity:100);
}
.user_callback #user_pic ul li.user_pic5{
        opacity:1;filter:alpha(opacity:100);
}
.user_callback #user_pic ul li.user_pic6{
        opacity:0.8;filter:alpha(opacity:80);
}
.user_callback #user_pic ul li.user_pic7{
        opacity:0.6;filter:alpha(opacity:60);
}
.user_callback #user_pic ul li.user_pic8{
        opacity:0.2;filter:alpha(opacity:20);
}

.user_callback #user_pic ul li.user_pic1 img{width:216.5px;height:248px;}
.user_callback #user_pic ul li.user_pic2 img{width:225.5px;height:259px;}
.user_callback #user_pic ul li.user_pic3 img{width:230.5px;height:264px;}
.user_callback #user_pic ul li.user_pic4 img{width:247.5px;height:285px;}
.user_callback #user_pic ul li.user_pic5 img{width:247.5px;height:285px;}
.user_callback #user_pic ul li.user_pic6 img{width:230.5px;height:264px;}
.user_callback #user_pic ul li.user_pic7 img{width:225.5px;height:259px;}
.user_callback #user_pic ul li.user_pic8 img{width:216.5px;height:248px;}

.user_callback #user_pic span{display:inline-block;*display:inline;*zoom:1;width:80px;height:80px;position:absolute;top:160px;z-index:30;cursor:pointer;opacity:0.7;filter:alpha(opacity=70);}
.user_callback #user_pic:hover span{opacity:1;filter:alpha(opacity=100);}
.user_callback #user_pic span img{width:80px;height:80px;display:block;}
.user_callback #user_pic span.prev{background:url(img/daohang4.png) no-repeat;position:absolute;top:100px;left:5px;display:inline-block; width:60px;height:60px;}
.user_callback #user_pic span.next{background:url(img/danhagng3.png) no-repeat;position:absolute;top:100px;right:5px;display:inline-block;width:60px;height:60px; }
.user_callback #user_pic span.prev:hover{background:url(img/5836af12Neb8a56523.png) no-repeat;}
.user_callback #user_pic span.next:hover{background:url(img/5836b011N9a4d4531.jpg) no-repeat;}
.user_callback{background:#F0FFF0;overflow:hidden;}
</style>
<body >
<div id="title">
				<div id=title-left>

					<a href="http://www.ahpumec.edu.cn/"><img src="img/school1.png"style=" width:50px;height:50px; "/></a>
				</div>
				<div id=title-right>
					<marquee>安徽信息工程学院学科竞赛管理系统	</marquee>

				</div>

			</div>
			<div id="title-second">
				<ul>
					<li><a href="HomePage.php">系统首页</a></li>
					<li><a href="ContestsProject.php">竞赛项目</a></li>
					<li><a href="CompetitionResult.php">竞赛成果</a></li>
					<li><a href="NewsCenter.php">新闻中心</a></li>
					<li><a href="Announce.php">通知公告</a></li>
					<li><a href="Mannger.php">管理规定</a></li>
					<li><a href="ContactUs.php">联系我们</a></li>
					<li><a href="Login.php">用户登陆</a></li>
					<li><a href="TeacherPage.php">教师后台</a></li>
					<li><a href="Administrator.php">管理后台</a></li>
					<li><a href="StudentPage.php">学生界面</a></li>
	       			<li><a href="UserFeedback.php">用户反馈</a></li>

				</ul>
			</div>
<div style="margin-top:20px;">
<div class="user_callback"style="background:#E0EEE0">  
	<div class="user_pic" id="user_pic">   
		<span class="prev"></span>   <span class="next"></span>   
		<ul id="user_call">    
			<li class="user_pic1">
				<a href="http://www.ahpumec.edu.cn/"> <img src="img/u1.jpg" alt="1" width="248" height="285" /></a>
			</li>    
			<li class="user_pic2"> 
				<a href="http://www.ahpumec.edu.cn/"> <img src="img/u2.jpg" alt="2" width="247" height="285" /></a>
			</li>    
			<li class="user_pic3">
				<a href="http://www.ahpumec.edu.cn/"> <img src="img/u3.jpg" alt="3" width="248" height="285" /></a>
			</li>    
			<li class="user_pic4">
				<a href="http://www.ahpumec.edu.cn/"> <img src="img/u10.jpg" alt="4" width="247" height="285" /></a>
			</li>    
			<li class="user_pic5"> 
				<a href="http://www.ahpumec.edu.cn/"> <img src="img/u5.jpg" alt="5" width="247" height="285" /></a>
			</li>    
			<li class="user_pic6">
				<a href="http://www.ahpumec.edu.cn/"> <img src="img/u6.png" alt="6" width="247" height="285" /></a>
			</li>    
			<li class="user_pic7">
				<a href="http://www.ahpumec.edu.cn/"> <img src="img/u7.jpg" alt="7" width="247" height="285" /></a> 
			</li>    
			<li class="user_pic8">
				<a href="http://localhost/CourseContests/HomePage.php"> <img src="img/u11.jpg" alt="8" width="247" height="285" /></a>
			</li>   
		</ul>  
	</div>
</div>
<div style="margin-top:30px;">
<h4 style="color:red">通知公告</h4>
 <?php 
				         	         
     while (($row=mysql_fetch_array($result))!=false){
             echo "<div style='margin-top:-10px'>";
             echo "<br/>";
             echo "<div style='float:left;margin-left:20px;'>";
             echo "<a href='AnnouncementDisplay.php?noticeID=$row[noticeID]' >".$row['noticeID']."、".$row['noticeName']."</a>";
             echo "&nbsp;&nbsp;&nbsp;&nbsp;";
             echo "</div>";
             echo "<div style='float:right;margin-right:500px;'>";
             echo $row['noticeTime'];
             echo "</div>";
             echo "</div>";
             echo "<br/>";
         
         }
         ?>
</div>
<script type="text/javascript">function arcSlip()
  {
	 var oPic=document.getElementById('user_pic');
	 var oPrev=getByClass(oPic,'prev')[0];
	 var oNext=getByClass(oPic,'next')[0];
	 
	 var aLi=oPic.getElementsByTagName('li');
	 
	 var arr=[];
	 
	 for(var i=0;i<aLi.length;i++)
	 {
	   var oImg=aLi[i].getElementsByTagName('img')[0];
	   
	 	 arr.push([parseInt(getStyle(aLi[i],'left')),parseInt(getStyle(aLi[i],'top')),
		           getStyle(aLi[i],'zIndex'),oImg.width,parseFloat(getStyle(aLi[i],'opacity')*100)]);
	 }
	 
	 
	 oPrev.onclick=function moveTP()
	 {
	     arr.push(arr[0]);
		 arr.shift();
		     for(var i=0;i<aLi.length;i++)
	         {
			     var oImg=aLi[i].getElementsByTagName('img')[0];
					
					aLi[i].style.zIndex=arr[i][2];
					startMove(aLi[i],{left:arr[i][0],top:arr[i][1],opacity:arr[i][4]});
					startMove(oImg,{width:arr[i][3]});
			 }
			
	 }
	 
	oNext.onclick=function moveTN()
	 {
	      arr.unshift(arr[arr.length-1]);
		  arr.pop();
		     for(var i=0;i<aLi.length;i++)
	         {
			     var oImg=aLi[i].getElementsByTagName('img')[0];
					
					aLi[i].style.zIndex=arr[i][2];
					startMove(aLi[i],{left:arr[i][0],top:arr[i][1],opacity:arr[i][4]});
					startMove(oImg,{width:arr[i][3]});
			 }
	 }
    var moveTime = setInterval (function(){
	
		oNext.click();
		
		},1000);
	$('#user_pic').hover(function(){
		;;
         clearInterval(moveTime);
            },function(){
        moveTime=setInterval(function(){	
		oNext.click();		
		},1000);
            });
				
 function getStyle(obj,name)
	 {
	       if(obj.currentStyle){ return obj.currentStyle[name]; }
		   else{ return getComputedStyle(obj,false)[name]; }
	 }
  } 
function getByClass(oParent,sClass)
  {
      var aResult=[];
	  var aEle=oParent.getElementsByTagName('*');
	  
		  for(var i=0;i<aEle.length;i++)
		  {
			 if(aEle[i].className==sClass)
			 {
				aResult.push(aEle[i]);
			 }
		  }
	  return aResult;
  }
function getStyle(obj,name)
  {
       if(obj.currentStyle)
	   {
	       return obj.currentStyle[name];
	   }
       
	   else
	   {
	       return getComputedStyle(obj,false)[name];
	   }
  }
 function startMove(obj,json,fnEnd)
  {
       clearInterval(obj.timer);
       obj.timer=setInterval(function()
	   {
		 var bStop=true;
		 for(var attr in json)
	     {	
			   var cur=0;
	
			   if(attr=='opacity')
			   {
					cur=Math.round(parseFloat(getStyle(obj,attr))*100);
			   }
			   else
			   {
					cur=parseInt(getStyle(obj,attr));
			   }
		  
			   var  speed=(json[attr]-cur)/40;
			   speed=speed>0?Math.ceil(speed):Math.floor(speed);
		   
			   if(cur!=json[attr]) bStop=false;
			 
			   if(attr=='opacity')
			   {
				   obj.style.filter='alpha(opacity:'+(cur+speed)+')';
				   obj.style.opacity=(cur+speed)/100;
			   }
			   else
			   {
				   obj.style[attr]=cur+speed+'px';
			   }
		 }
		 
		 if(bStop)
		 {
		     clearInterval(obj.timer);
			 if(fnEnd) fnEnd();
		 }
		 
	   },30)
	   
	 
  }
  arcSlip();
</script>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">

</div>
</div>
</body>
</html>

