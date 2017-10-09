<?php 

session_start();

    include 'MySqlAdmin.php';

    @$noticeId = $_GET["noticeId"];
    @$noticeTime = $_GET["noticeTime"];
    @$IdCard=$_SESSION["IdCard"];
   // if($IdCard!="管理员"){
       // header("location:Announce.php");
   // }
   if($IdCard=="管理员"){
        
        
        $sql="DELETE FROM notice WHERE noticeTime='$noticeTime'";
        mysql_query($sql);
        
      header("location:Announce.php");
        
        
        
    }
    if($IdCard!="管理员"){
        header("location:Announce.php");
    }
   
   
  ?>
