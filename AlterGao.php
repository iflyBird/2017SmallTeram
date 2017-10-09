<?php

include 'MySqlAdmin.php';

session_start();
@$noticeId=$_GET["noticeId"];
@$noticeName=$_GET["noticeName"];
@$username=$_POST["usename"];
@$IdCard=$_SESSION["IdCard"];
if($IdCard!="管理员"){
    header("location:Announce.php");
}if($IdCard=="管理员"){
$notice="select noticeId,noticeName,noticeTime from  notice where noticeName='$noticeName'";
$result1=mysql_query($notice);
$products=mysql_fetch_array($result1);
    
}

?>

<html>
<head>
<style>
#content{
	//background:#C6E2FF;
	width:800px;
	height:600px;
	margin:0px auto;
}
input{
	
	margin-top:40px;
	width:180px;
	height:30px;
	margin-bottom:80px;
}



</style>

</head>
<body style="background-image: url(img/公告.jpg); background-repeat: no-repeat;background-size: cover;">
<div id="content">
<form action="AlterGaoAction.php" method="post">
<div style="margin-left:320px;">
<div>
<a>公告编号</a>
 <input type="text" name="noticeId" value="<?php echo $products["noticeId"] ?>" readonly="true" style="color:#CCCCOO">


</div>
<div>
<a>公告名称</a>
 <input type="text" name="noticeName" value="<?php echo $products["noticeName"] ?>" style="color:#CCCCOO">


</div>
<div>
<a>公告时间</a>
 <input type="text" name="noticeTime" value="<?php echo $products["noticeTime"] ?>"  style="color:#CCCCOO">


</div>
<div>
             修改公告 <input type="submit" value="修改"><br/>
                   <a href='Announce.php'style='margin-left:800px'>返回主界面</a>
            </div>
            </div>

</form>
</div>



</body>

</html>


