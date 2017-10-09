<?php
include 'MySqlAdmin.php';

include_once 'conn.php';
//4.发送sql语句并得到结果进行处理
    //4.1分页[分页要发出两个sql语句，一个是获得$rowCount,一个是通过sql的limit获得分页结果。所以我们会获得两个结果集，在命名的时候要记得区分。
//分页 （四个值 两个sql语句）。]
    $pageSize=1;//每页显示多少条记录
    $rowCount=0;//共有多少条记录
    $pageNow=1;//希望显示第几页
    $pageCount=0;//一共有多少页 [分页共有这个四个指标，缺一不可。由于$rowCount可以从服务器获得的，所以可以给予初始值为0；
//$pageNow希望显示第几页，这里最好是设置为0；$pageSize是每页显示多少条记录，这里根据网站需求提前制定。
//.$pageCount=ceil($rowCount/$pageSize）,既然$rowCount可以初始值为0，那么$pageCount当然也就可以设置为0.四个指标，两个0 ，一个1，另一个为网站需求。]
         //4.15根据分页链接来修改$pageNow的值
         if(!empty($_GET['pageNow'])){
            $pageNow=$_GET['pageNow'];
        }//[根据分页链接来修改$pageNow的值。]
     $sql="select*from feedback";
     $res1=mysql_query($sql);
    //4.11取出行数
     if(($row=mysql_fetch_row($res1))!=false){
        $rowCount=$row[0];        
    }//[取得$rowCount,，进了我们就知道了$pageCount这两个指标了。]
    //4.12计算共有多少页
     $pageCount=ceil($rowCount/$pageSize);
     $pageStart=($pageNow-1)*$pageSize;
    
     //4.13发送带有分页的sql结果
     $sql="select*from feedback limit $pageStart,$pageSize";//[根据$sql语句的limit 后面的两个值（起始值，每页条数），来实现分页。以及求得这两个值。]
     $res2=mysql_query($sql,$conn) or die('无法获取结果集'.mysql_error());

    echo "<body style='background-image:url(img/pb19.jpg); background-repeat: no-repeat;background-size: cover;'>";
	echo "<p align='center' style='font-size:24px'>用户反馈情况</p>";
	 echo "<table border='1' cellspacing='0' width='1000' align='center'>";

     echo"<hr/>";
     echo "<tr><th>反馈编号</th><th>反馈信息</th></tr>";
   
 
      
    
    while   (($emp =mysql_fetch_array($res2))!=false){
    echo "<tr>";
    echo "<td align='center'>".$emp['id']."</td>";
    echo "<td align='center'>".$emp['content']."</td>";

    echo "</tr>";
   
     }
     echo "<tr><td colspan='13'>";
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
     echo"<a href='Administrator.php'style='text-decoration: none;'>返回</a>";
     }
     }
     
     

     echo"</td>";
     echo "</tr>";
     echo "</table>";
     echo "</body>";

?>