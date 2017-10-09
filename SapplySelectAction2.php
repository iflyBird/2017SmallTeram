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
<body background="img/pb19.jpg"></body>
<?php 
      //  session_start();
       /// $username=$_SESSION["username"];
        
      // if(!(isset($username))){
      //     header("location:userLogin.php");
     //  }
    
      include_once 'conn.php';
   
        $appID=$_POST["appID"];
        $teamID=$_POST["teamID"];
    
          
        //$sql="SELECT  distinct appID,comName,distinct teamName,teaName,elseInfor,state from team,contestinfor,teacherinfor,enlistresult
        //where  team.teamID=enlistresult.teamID
        //and contestinfor.comID=enlistresult.comID
       // and teacherinfor.teaID=enlistresult.teaID
       // and  appID='$appID'or teamName='$teamName'";
      
     $sql="select appID,comID,teamID,teaID,elseInfor,state from enlistresult  where  teamID='$teamID' OR appID='$appID'";
        $res2=mysql_query($sql,$conn) or die('无法获取结果集'.mysql_error());
     echo "<caption><font size='8' color='blue'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查看竞赛申请信息</font></caption>";
     echo "<table border='1' cellspacing='0' width='1000' align='center'>";
     echo"<br/>";
     echo"<hr/>";
     
     echo "<tr><th>申请编号</th><th>项目编号</th><th>团队编号</th><th>指导老师编号</th><th>备注</th><th>申请状态</th></tr>";

     //定义查询语句
     
    
     
     //连接数据库服务器
     
     //执行查询语句
    
    while (($emp=mysql_fetch_array($res2))!=false){
    echo "<tr>";
    
    echo "<td align='center'>".$emp["appID"]."</td>"; 
    echo "<td align='center'>".$emp["comID"]."</td>";
    echo "<td align='center'>".$emp["teamID"]."</td>";
    echo "<td align='center'>".$emp["teaID"]."</td>";
    echo "<td align='center'>".$emp["elseInfor"]."</td>";
    echo "<td align='center'>".$emp["state"]."</td>";
    echo "</tr>";
   
     }
     echo"</td>";
     echo "</tr>";
     echo "<tr><td colspan='13'><a href='SapplyList2.php' ><b><font size='5' color='blue'>返回</font></b></a></td></tr>";
     echo "</table>";
   
     echo"<hr/>";
  
     
?>
</html> 