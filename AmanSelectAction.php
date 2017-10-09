<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>管理员信息列表</title>
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
        $manName=$_POST["manName"];
        $manID=$_POST["manID"];
    
          
   
    
     
    $sql="select manID,manName,manSex,manTel,manYX,manPwd from manageinfor  where  manID='$manID' OR manName='$manName'";
  
     echo "<caption><font size='8' color='blue'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查看管理员信息</font></caption>";
     echo "<table border='1' cellspacing='0' width='1000' align='center'>";
     echo"<br/>";
     echo"<hr/>";
     
     echo "<tr><th>管理员编号</th><th>管理员姓名</th><th>管理员性别</th><th>管理员电话</th><th>管理员邮箱</th><th>管理员密码</th></tr>";
   
    
     
     //定义查询语句
     
    
     
     //连接数据库服务器
     
     //执行查询语句
    $result = mysql_query($sql);
    while (($emp =mysql_fetch_array($result))!=false){
    echo "<tr>";
    echo "<td align='center'>".$emp["manID"]."</td>";
    echo "<td align='center'>".$emp["manName"]."</td>";
    echo "<td align='center'>".$emp["manSex"]."</td>";
    echo "<td align='center'>".$emp["manTel"]."</td>";
    echo "<td align='center'>".$emp["manYX"]."</td>";
    echo "<td align='center'>".$emp["manPwd"]."</td>";
    echo "</tr>";
   
     }
     echo"</td>";
     echo "</tr>";
     echo "<tr><td colspan='13'><a href='AmanList.php' ><b><font size='5' >返回</font></b></a></td></tr>";
     echo "</table>";
   
     echo"<hr/>";
   
     
?>
</html> 