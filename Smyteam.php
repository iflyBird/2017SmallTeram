<?php 
   
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("dcms");
    mysql_query("set names utf8");
    
    
  //  session_start();
   // $_SESSION["username"]=$username;
    

?>

<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>我的队伍</title>
<style type="text/css">
 body {
 	         background-image: url(img/pb18.jpg);
 	       background-repeat: no-repeat;
 	     background-size: cover;
             background-color:#B6C4F5;
            }
</style>
</head>
<?php 
      //  session_start();
       /// $username=$_SESSION["username"];
        
      // if(!(isset($username))){
      //     header("location:userLogin.php");
     //  }
    
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("dcms");
    mysql_query("set names utf8");
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
      $sql = "SELECT count(*) FROM team,studentinfor
        WHERE team.captainID=studentinfor.stuID
        AND stuID='2017060101'";
     $res1=mysql_query($sql);
    //4.11取出行数
     if(($row=mysql_fetch_row($res1))!=false){
        $rowCount=$row[0];        
    }//[取得$rowCount,，进了我们就知道了$pageCount这两个指标了。]
    //4.12计算共有多少页
     $pageCount=ceil($rowCount/$pageSize);
     $pageStart=($pageNow-1)*$pageSize;
    
     //4.13发送带有分页的sql结果
     $sql=" SELECT * FROM team,studentinfor
        WHERE team.captainID=studentinfor.stuID
        AND stuID='2017060101' limit $pageStart,$pageSize";//[根据$sql语句的limit 后面的两个值（起始值，每页条数），来实现分页。以及求得这两个值。]
     $res2=mysql_query($sql,$conn) or die('无法获取结果集'.mysql_error());
     //echo '<table border=1>';  
     echo "<caption><font size='8' color='blue'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我的队伍</font></caption>";
     echo"<form action='teamSelectAction1.php' method='post'>";
     echo "<table border='1' cellspacing='0' width='400' align='center'>";
     echo"<br/>";
     echo"<hr/>";

    echo "<tr><th>编号</th><th>队名</th><th>队长编号</th><th>队员1编号</th><th>队员2编号</th></tr>";
    while   (($emp =mysql_fetch_row($res2))!=false){
    echo "<tr>";
    echo "<td align='center'>".$emp[0]."</td>";
    echo "<td align='center'>".$emp[1]."</td>";
    echo "<td align='center'>".$emp[2]."</td>";
    echo "<td align='center'>".$emp[3]."</td>";
    echo "<td align='center'>".$emp[4]."</td>";
    echo "</tr>";
   
     }
     echo "<tr><td colspan='5'>";
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
     
     for($i=$pageNow+1;$i<$pageCount;$i++){
     echo "<a href='?pageNow=$i'>第".$i."页</a> ";//[打印出页码的超链接] 
     
     if($i==($pageNow+3))
     { 
         echo "...";
         break;
     
     }
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
    
     echo"<a href='StudentPage.php' ><b><font size='5' color='red'>返回</font></b></a>";
?>
</html> 