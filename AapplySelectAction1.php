<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>申请信息列表</title>
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
<body background="img/pb18.jpg"></body>
<?php 
      //  session_start();
       /// $username=$_SESSION["username"];
        
      // if(!(isset($username))){
      //     header("location:userLogin.php");
     //  }
    
       include_once 'conn.php';
   
       $appID=$_POST["appID"];
       $teamID=$_POST["teamID"];
    
          
   
     $sql="select appID,comID,teamID,teaID,elseInfor,state from enlistresult  where  teamID='$teamID' OR appID='$appID'";
  
     echo "<caption><font size='8' color='orangered'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查看竞赛申请信息</font></caption>";
     echo "<table border='1' cellspacing='0' width='1000' align='center'>";
     echo"<br/>";
     echo"<hr/>";
     
     echo "<tr><th>申请编号</th><th>项目编号</th><th>团队编号</th><th>指导老师编号</th><th>备注</th><th>申请状态</th><th>操作1</th><th>操作2</th><th>操作3</th></tr>";

     //定义查询语句
     
    
     
     //连接数据库服务器
     
     //执行查询语句
    $result = mysql_query($sql);
    while (($emp =mysql_fetch_array($result))!=false){
    echo "<tr>";
    
    echo "<td align='center'>".$emp["appID"]."</td>"; 
    echo "<td align='center'>".$emp["comID"]."</td>";
    echo "<td align='center'>".$emp["teamID"]."</td>";
    echo "<td align='center'>".$emp["teaID"]."</td>";
    echo "<td align='center'>".$emp["elseInfor"]."</td>";
    echo "<td align='center'>".$emp["state"]."</td>";
    echo "<td align='center'><a href ='AapplyCheck.php?appID=$emp[appID]'><b><font size='5' color='#FF00FF'>审核</font></b></a></td>";
    echo "<td align='center'><a href ='AapplyModify.php?appID=$emp[appID]'><b><font size='5' color='#FF00FF'>修改</font></b></a></td>";
    echo "<td align='center'><a href ='AapplyDeleteAction.php?appID=$emp[appID]'><b><font size='5' color='red'>删除</font></b></a></td>";
    echo "</tr>";
   
     }
     echo"</td>";
     echo "</tr>";
     echo "<tr><td colspan='13'><a href='AapplyList1.php' ><b><font size='5' >返回</font></b></a></td></tr>";
     echo "</table>";
   
     echo"<hr/>";
     echo"<a href='userLoginCutAction.php' ><b><font size='5' >注销</font></b></a>";
     
?>
</html> 