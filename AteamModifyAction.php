<?php

     #数据处理页面：从增加页面获取管理员所输入的新员工信息，增加到数组

     #1、获取请求的数据
     
    $teamID=$_POST["teamID"];
    $teamName=$_POST["teamName"];
    $captainID=$_POST["captainID"];
    $member1ID=$_POST["member1ID"];
    $member2ID=$_POST["member2ID"];
   
    
 
  
    
    //定义插入数据SQL语句
     include_once 'conn.php';
   if($teamName&&$member1ID&&$member2ID&&$captainID){
        $sql = "update team set teamName='".$teamName."',captainID='".$captainID."',member1ID='".$member1ID."',member2ID='".$member2ID."' where teamID=".$teamID;
    } 
    else if($teamName&&$member1ID&&$captainID)
    {
       //$sql1="update team set member2ID='null' where teamID=".$teamID;
       $sql = "update team set teamName='".$teamName."',captainID='".$captainID."',member1ID='".$member1ID."' where teamID=".$teamID;
    }
    else if($teamName&&$captainID)
    {
       $sql = "update team set teamName='".$teamName."',captainID='".$captainID."' where teamID=".$teamID;
    }
    else
    {
       $sql=0; 
        
    }
     
    
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
    
    
    
    //跳转到学生列表页面stuList1.php
    //header("location:teamList1.php");
?>