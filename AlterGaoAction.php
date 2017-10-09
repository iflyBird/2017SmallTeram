<?php

session_start();
$username=$_SESSION["username"];
$IdCard=$_SESSION["IdCard"];

//if(!isset($username)){
   // header("location:HomePage.php");
//}if($IdCard!="管理员"){
  //  header("location:Homepage.php");
//}

    include 'MySqlAdmin.php';
    
    $noticeId=$_POST["noticeId"];
    $noticeName=$_POST["noticeName"];
    $noticeTime=$_POST["noticeTime"];
   // $GYno=$_POST["GYno"];
    
    $sql="update notice set noticeName='$noticeName',noticeTime='$noticeTime' where noticeId=' $noticeId'";
    mysql_query($sql);
    
    header("location:Announce.php");

?>


