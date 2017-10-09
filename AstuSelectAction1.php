<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>学生信息列表</title>
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
   
        $stuName=$_POST["stuName"];
        $stuID=$_POST["stuID"];
    
          
   
    
     
    $sql="select stuID,stuName,stuSex,stuBirth,stuTel,stuYX,stuPro,stuClass,stuXueYuan,stuPwd from studentinfor  where  stuID='$stuID' OR stuName='$stuName'";
  
     echo "<caption><font size='8' color='blue'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查看学生信息</font></caption>";
     echo "<table border='1' cellspacing='0' width='1000' align='center'>";
     echo"<br/>";
     echo"<hr/>";
     
     echo "<tr><th>学生编号</th><th>学生姓名</th><th>学生性别</th><th>学生生日</th><th>学生电话</th><th>学生邮箱</th><th>学生专业</th><th>学生班级</th><th>学生学院</th><th>学生密码</th><th>操作1</th><th>操作2</th><th>操作3</th></tr>";
   
    
     
     //定义查询语句
     
    
     
     //连接数据库服务器
     
     //执行查询语句
    $result = mysql_query($sql);
    while (($emp =mysql_fetch_array($result))!=false){
    echo "<tr>";
    echo "<td align='center'>".$emp["stuID"]."</td>";
    echo "<td align='center'>".$emp["stuName"]."</td>";
    echo "<td align='center'>".$emp["stuSex"]."</td>";
    echo "<td align='center'>".$emp["stuBirth"]."</td>";
    echo "<td align='center'>".$emp["stuTel"]."</td>";
    echo "<td align='center'>".$emp["stuYX"]."</td>";
    echo "<td align='center'>".$emp["stuPro"]."</td>";
    echo "<td align='center'>".$emp["stuClass"]."</td>";
    echo "<td align='center'>".$emp["stuXueYuan"]."</td>";
    echo "<td align='center'>".$emp["stuPwd"]."</td>";
    echo "<td align='center'><a href ='AstuModify.php?stuID=$emp[stuID]'><b><font size='5' color='#FF00FF'>修改</font></b></a></td>";
    echo "<td align='center'><a href ='AstuDeleteAction.php?stuID=$emp[stuID]'><b><font size='5' color='red'>删除</font></b></a></td>";
    echo "<td align='center'><a href ='AstuDeleteAction.php?stuID=$emp[stuID]'><b><font size='5' color='red'>禁赛</font></b></a></td>";
    echo "</tr>";
   
     }
     echo"</td>";
     echo "</tr>";
     echo "<tr><td colspan='13'><a href='AstuList1.php' ><b><font size='5' >返回</font></b></a></td></tr>";
     echo "</table>";
   
     echo"<hr/>";
  
     
?>
</html> 