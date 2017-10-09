<?php 
   include 'MySqlAdmin.php';
   mysql_query("SET NAMES 'utf8'");
   
   $noticeID=$_GET["noticeID"];
   
   $query="select noticeName,noticeTime,noticeInfor from notice where noticeID='$noticeID'";
   $result=mysql_query($query);
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>通知详情</title>
		<style type="text/css">
        body{
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
<body style="background-image: url(img/公告.jpg); background-repeat: no-repeat;background-size: cover;">
       <div id="DIV" align="center">
          <?php 
          while (($row=mysql_fetch_array($result))!=false){
              echo $row['noticeName'];
              echo "<br/>";
              echo "时间：".$row['noticeTime'];
              echo "<br/>";
              echo "<br/>";
              echo $row['noticeInfor'];
          }
          ?>
       </div>
</body>
</html>