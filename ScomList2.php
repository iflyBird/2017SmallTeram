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
   //4.发送sql语句并得到结果进行处理
    //4.1分页[分页要发出两个sql语句，一个是获得$rowCount,一个是通过sql的limit获得分页结果。所以我们会获得两个结果集，在命名的时候要记得区分。
//分页 （四个值 两个sql语句）。]
    $pageSize=4;//每页显示多少条记录
    $rowCount=0;//共有多少条记录
    $pageNow=1;//希望显示第几页
    $pageCount=0;//一共有多少页 [分页共有这个四个指标，缺一不可。由于$rowCount可以从服务器获得的，所以可以给予初始值为0；
//$pageNow希望显示第几页，这里最好是设置为0；$pageSize是每页显示多少条记录，这里根据网站需求提前制定。
//.$pageCount=ceil($rowCount/$pageSize）,既然$rowCount可以初始值为0，那么$pageCount当然也就可以设置为0.四个指标，两个0 ，一个1，另一个为网站需求。]
         //4.15根据分页链接来修改$pageNow的值
         if(!empty($_GET['pageNow'])){
            $pageNow=$_GET['pageNow'];
        }//[根据分页链接来修改$pageNow的值。]
     $sql="select count(comID) from contestinfor";
     $res1=mysql_query($sql);
    //4.11取出行数
     if(($row=mysql_fetch_row($res1))!=false){
        $rowCount=$row[0];        
    }//[取得$rowCount,，进了我们就知道了$pageCount这两个指标了。]
    //4.12计算共有多少页
     $pageCount=ceil($rowCount/$pageSize);
     $pageStart=($pageNow-1)*$pageSize;
    
     //4.13发送带有分页的sql结果
     $sql="select * from contestinfor limit $pageStart,$pageSize";//[根据$sql语句的limit 后面的两个值（起始值，每页条数），来实现分页。以及求得这两个值。]
     $res2=mysql_query($sql,$conn) or die('无法获取结果集'.mysql_error());
     //echo '<table border=1>';  
     echo "<caption><font size='8' color='orangered'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查看赛事信息</font></caption>";
     echo"<form action='ScomSelectAction2.php' method='post'>";
     echo "<table border='1' cellspacing='0' width='1000' align='center'>";
     echo"<br/>";
     echo"<hr/>";
     echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a><font size='5' >赛事名：</font></a><input type='text' name='comName' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; />";
     echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a><font size='5' >赛事编号：</font></a><input type='text' name='comID' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; />";
     echo" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type='submit' name='查询' style='color: blue;' value='查询' />";
     echo"<br/>";
     echo"<hr/>";
     echo "<tr><th>赛事编号</th><th>赛事名</th><th>赛事信息</th><th>赛事时间</th><th>赛事水平</th><th>赛事举办方</th><th>负责人编号</th><th>开始</th><th>结束</th><th>地点</th><th>申请信息</th><th>总结</th><th>预算</th></tr>";
   
 
      
    
    while   (($emp =mysql_fetch_array($res2))!=false){
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
   
    echo "</tr>";
   
     }
     echo "<tr><td colspan='16'>";
     if($pageCount==0||$pageCount==1)
     {
     echo "<a href='?pageNow=1'>首页</a> ";
     }
    else if($pageCount==2)
     {
         echo "<a href='?pageNow=1'>首页</a> ";
         echo "<a href='?pageNow=$pageCount'>尾页</a> ";
     }
     else
     {
     echo "<a href='?pageNow=1'>首页</a> ";
     
     for($i=2;$i<$pageCount;$i++){
     echo "<a href='?pageNow=$i'>第".$i."页</a> ";//[打印出页码的超链接] 
     }
     echo "<a href='?pageNow=$pageCount'>尾页</a> ";
     echo"当前{$pageNow}/{$pageCount}页共{$rowCount}条";
     
     
     if($pageNow!=1)
     {
     $page=$pageNow-1;
     echo"<a href='?pageNow=$page'>上一页</a>";
     }
     if($pageNow!=$pageCount){
     $page=$pageNow+1;
     echo"<a href='?pageNow=$page'>下一页</a>";
     }
     }
     
     

     echo"</td>";
     echo "</tr>";
    
     echo "</table>";
     //4.14打印出页码的超链接
     
     //5.释放资源，关闭连接
     mysql_free_result($res2);
     mysql_close($conn);
     echo"<hr/>";
  
     echo "<br>";
     echo"<a href='StudentPage.php' ><b><font size='5'>返回学生</font></b></a>";
   
    
     
?>
</html> 