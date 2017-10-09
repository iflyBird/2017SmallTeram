<?php

     #数据处理页面：从增加页面获取管理员所输入的新员工信息，增加到数组

     #1、获取请求的数据
     
    //$stuID=$_POST["stuID"];
    $teamName=$_POST["teamName"];
    $captainID=$_POST["captainID"];
    $member1ID=$_POST["member1ID"];
    $member2ID=$_POST["member2ID"];
    
 
  
    
    //定义插入数据SQL语句
   // $sql = "insert into team (teamName,captainID,member1ID,member2ID) values(".$teamName.",'".$captainID."','". $member1ID."',  '".$member2ID."')";  
 if( $teamName&&$member1ID&&$member2ID&&$captainID){
       $sql = "insert into team (teamName,captainID,member1ID,member2ID) values('$teamName','$captainID','$member1ID',  '$member2ID')";
    }
    else if($teamName&&$member1ID&&$captainID)
    {
       $sql = "insert into team (teamName,captainID,member1ID) values('$teamName','$captainID','$member1ID')";
    }
    else if($teamName&&$captainID)
    {
       $sql = "insert into team (teamName,captainID) values('$teamName','$captainID')";
    }
    else
    {
        $sql=0;
    
    }
    
       include_once 'conn.php';
    
    $s=mysql_query($sql);
    
    if($s)
    {
        echo "<script>alert('成功！')</script>";
    }
    
    else{
    
        echo "<script>alert('失败！')</script>";
    }
    echo"<script>window.location.href='AteamList1.php';</script>";
    @mysql_free_result($sql);
    mysql_close($conn);
    
    //跳转到学生列表页面teaList.php
    //header("location:teamList1.php");
?>