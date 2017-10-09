<?php 
   include 'MySqlAdmin.php';
   mysql_query("SET NAMES 'utf8'");
   
   $newsID=$_GET["newsID"];
   
   $query="select newsName,newsTime,newsInfor from news where newsID='$newsID'";
   $result=mysql_query($query);
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>新闻详情</title>
		<style type="text/css">
        body{
        	background:
        	
	            padding:0;
	            margin:0;
	
            }
         #DIV{
	      width:850px;
          margin-top:50px;
          margin-left:300px;
         }
        </style>
     </head>
<body style="background:#B9D3EE">
       <div id="DIV" align="center">
          <?php 
          while (($row=mysql_fetch_array($result))!=false){
              echo $row['newsName'];
              echo "<br/>";
              echo "时间：".$row['newsTime'];
              echo "<br/>";
              echo "<br/>";
              echo $row['newsInfor'];
          }
          ?>
       </div>
</body>
</html>