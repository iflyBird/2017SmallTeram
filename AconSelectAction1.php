<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>竞赛结果信息列表</title>
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
   
        $bianhao=$_POST["bianhao"];
        $appID=$_POST["appID"];
    
          
   
     $sql="select bianhao,appID,grade,rank,elseInfor from comresult  where  bianhao='$bianhao' OR appID='$appID'";
  
     echo "<caption><font size='8' color='blue'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查看竞赛结果信息</font></caption>";
     echo "<table border='1' cellspacing='0' width='1000' align='center'>";
     echo"<br/>";
     echo"<hr/>";
     
     echo "<tr><th>编号</th><th>申请编号</th><th>成绩</th><th>排名</th><th>备注</th><th>操作1</th><th>操作2</th><th>操作3</th></tr>";
   
    
     
     //定义查询语句
     
    
     
     //连接数据库服务器
     
     //执行查询语句
    $result = mysql_query($sql);
    while (($emp =mysql_fetch_array($result))!=false){
    echo "<tr>";
    echo "<td align='center'>".$emp["bianhao"]."</td>";
    echo "<td align='center'>".$emp["appID"]."</td>"; 
    echo "<td align='center'>".$emp["grade"]."</td>";
    echo "<td align='center'>".$emp["rank"]."</td>";
    echo "<td align='center'>".$emp["elseInfor"]."</td>";
    echo "<td align='center'><a href ='AconCheck.php?bianhao=$emp[bianhao]'><b><font size='5' color='#FF00FF'>审核</font></b></a></td>";
    echo "<td align='center'><a href ='AconModify.php?bianhao=$emp[bianhao]'><b><font size='5' color='#FF00FF'>修改</font></b></a></td>";
    echo "<td align='center'><a href ='AconDeleteAction.php?bianhao=$emp[bianhao]'><b><font size='5' color='red'>删除</font></b></a></td>";
    echo "</tr>";
   
     }
     echo"</td>";
     echo "</tr>";
     echo "<tr><td colspan='13'><a href='AconList1.php' ><b><font size='5' >返回</font></b></a></td></tr>";
     echo "</table>";
   
     echo"<hr/>";

     
?>
</html> 