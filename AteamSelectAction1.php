<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>团队信息列表</title>
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
   
        $teamName=$_POST["teamName"];
        $teamID=$_POST["teamID"];
    
          
   
    
     
    $sql="select teamID,teamName,captainID,member1ID,member2ID from team  where  teamID='$teamID' OR teamName='$teamName'";
  
     echo "<caption><font size='8' color='blue'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查看团队信息</font></caption>";
     echo "<table border='1' cellspacing='0' width='1000' align='center'>";
     echo"<br/>";
     echo"<hr/>";
     
     echo "<tr><th>团队编号</th><th>团队名</th><th>队长编号</th><th>队员1编号</th><th>队员2编号</th><th>操作1</th><th>操作2</th></tr>";
   
    
     
     //定义查询语句
     
    
     
     //连接数据库服务器
     
     //执行查询语句
    $result = mysql_query($sql);
    while (($emp =mysql_fetch_array($result))!=false){
    echo "<tr>";
    echo "<td align='center'>".$emp["teamID"]."</td>";
    echo "<td align='center'>".$emp["teamName"]."</td>"; 
    echo "<td align='center'>".$emp["captainID"]."</td>";
    echo "<td align='center'>".$emp["member1ID"]."</td>";
     echo "<td align='center'>".$emp["member2ID"]."</td>";
    echo "<td align='center'><a href ='AteamModify.php?teamID=$emp[teamID]'><b><font size='5' color='#FF00FF'>修改</font></b></a></td>";
    echo "<td align='center'><a href ='AteamDeleteAction.php?teamID=$emp[teamID]'><b><font size='5' color='red'>删除</font></b></a></td>";
    echo "</tr>";
   
     }
     echo"</td>";
     echo "</tr>";
     echo "<tr><td colspan='13'><a href='AteamList1.php' ><b><font size='5' >返回</font></b></a></td></tr>";
     echo "</table>";
   
     echo"<hr/>";
   
     
?>
</html> 