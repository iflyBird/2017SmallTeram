<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>教师信息列表</title>
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
   
        $teaName=$_POST["teaName"];
        $teaID=$_POST["teaID"];
    
          
   
    
     
    $sql="select teaID,teaName,teaSex,teaTel,teaYX,teaPro,teaXueYuan,teaPost,teaPS,teaPwd from teacherinfor  where  teaID='$teaID' OR teaName='$teaName'";
  
     echo "<caption><font size='8' color='blue'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查看教师信息</font></caption>";
     echo "<table border='1' cellspacing='0' width='1000' align='center'>";
     echo"<br/>";
     echo"<hr/>";
     
     echo "<tr><th>教师编号</th><th>教师姓名</th><th>教师性别</th><th>教师电话</th><th>教师邮箱</th><th>教师专业</th><th>教师学院</th><th>教师职务</th><th>教师备注</th><th>教师密码</th><th>操作1</th><th>操作2</th></tr>";
   
    
     
     //定义查询语句
     
    
     
     //连接数据库服务器
     
     //执行查询语句
    $result = mysql_query($sql);
    while (($emp =mysql_fetch_array($result))!=false){
    echo "<tr>";
    echo "<td align='center'>".$emp["teaID"]."</td>";
    echo "<td align='center'>".$emp["teaName"]."</td>";
    echo "<td align='center'>".$emp["teaSex"]."</td>";
    echo "<td align='center'>".$emp["teaTel"]."</td>";
    echo "<td align='center'>".$emp["teaYX"]."</td>";
    echo "<td align='center'>".$emp["teaPro"]."</td>";
  
    echo "<td align='center'>".$emp["teaXueYuan"]."</td>";
    echo "<td align='center'>".$emp["teaPost"]."</td>";
    echo "<td align='center'>".$emp["teaPS"]."</td>";
    echo "<td align='center'>".$emp["teaPwd"]."</td>";
    echo "<td align='center'><a href ='AteaModify.php?teaID=$emp[teaID]'><b><font size='5' color='#FF00FF'>修改</font></b></a></td>";
    echo "<td align='center'><a href ='AteaDeleteAction.php?teaID=$emp[teaID]'><b><font size='5' color='red'>删除</font></b></a></td>";
    echo "</tr>";
   
     }
     echo"</td>";
     echo "</tr>";
     echo "<tr><td colspan='13'><a href='AteaList1.php' ><b><font size='5' >返回</font></b></a></td></tr>";
     echo "</table>";
   
     echo"<hr/>";
   
     
?>
</html> 