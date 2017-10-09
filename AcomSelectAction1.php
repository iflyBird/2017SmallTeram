<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>赛事信息列表</title>
<style type="text/css">
body {
             background-repeat:no-repeat ;background-size:100% 100%; background-attachment:fixed;
            }
a{
	         text-decoration: none;
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
	        color:red;
			}
</style>
</head>
<body background="img/pb19.jpg"></body>
<?php 
      //  session_start();
       /// $username=$_SESSION["username"];
        
      // if(!(isset($username))){
      //     header("location:userLogin.php");
     //  }
    
      include_once 'conn.php';
   
        $comName=$_POST["comName"];
        $comID=$_POST["comID"];
    
          
   
    
     
    $sql="select comID,comName,comInfor,comTime,comLever,comSponsor,ID,startTime,overTime,comPlace,comAppInfor,comSum,comAud from contestinfor  where  comID='$comID' OR comName='$comName'";
  
     echo "<caption><font size='8' color='orangered'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查看学生信息</font></caption>";
     echo "<table border='1' cellspacing='0' width='1000' align='center'>";
     echo"<br/>";
     echo"<hr/>";
     
      echo "<tr><th>赛事编号</th><th>赛事名</th><th>赛事信息</th><th>赛事时间</th><th>赛事水平</th><th>赛事举办方</th><th>负责人编号</th><th>开始</th><th>结束</th><th>地点</th><th>申请信息</th><th>总结</th><th>预算</th><th>操作1</th><th>操作2</th></tr>";
   
    
     
     //定义查询语句
     
    
     
     //连接数据库服务器
     
     //执行查询语句
    $result = mysql_query($sql);
   while   (($emp =mysql_fetch_array($result))!=false){
    echo "<tr>";
    echo "<td align='center'>".$emp["comID"]."</td>";
    echo "<td align='center'>".$emp["comName"]."</td>";
    echo "<td align='center'>".$emp["comInfor"]."</td>";
    echo "<td align='center'>".$emp["comTime"]."</td>";
    echo "<td align='center'>".$emp["comLever"]."</td>";
    echo "<td align='center'>".$emp["comSponsor"]."</td>";
    echo "<td align='center'>".$emp["ID"]."</td>";
    echo "<td align='center'>".$emp["startTime"]."</td>";
    echo "<td align='center'>".$emp["overTime"]."</td>";
    echo "<td align='center'>".$emp["comPlace"]."</td>";
    echo "<td align='center'>".$emp["comAppInfor"]."</td>";
    echo "<td align='center'>".$emp["comSum"]."</td>";
    echo "<td align='center'>".$emp["comAud"]."</td>";
    echo "<td align='center'><a href ='AcomModify.php?comID=$emp[comID]'><b><font size='5' color='#FF00FF'>修改</font></b></a></td>";
    echo "<td align='center'><a href ='AcomDeleteAction.php?comID=$emp[comID]'><b><font size='5' color='red'>删除</font></b></a></td>";
    echo "</tr>";
   
     }
     echo"</td>";
     echo "</tr>";
     echo "<tr><td colspan='16'><a href='AcomList1.php' ><b><font size='5' >返回</font></b></a></td></tr>";
     echo "</table>";
   
     echo"<hr/>";
    
     
?>
</html> 