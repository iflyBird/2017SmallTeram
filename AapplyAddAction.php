<?php

     #数据处理页面：从增加页面获取管理员所输入的新员工信息，增加到数组

     #1、获取请求的数据
     
   
    $comID=$_POST["comID"];
    $teamID=$_POST["teamID"];
    $teaID=$_POST["teaID"];
   
    $elseInfor=$_POST["elseInfor"];
    $state=$_POST["state"];
 
  
    
    //定义插入数据SQL语句
    $sql = "insert into enlistresult (comID,teamID,teaID,elseInfor,state) values(".$comID.",'".$teamID."','".$teaID."','".$elseInfor."','".$state."')";                                
   
    include_once 'conn.php';
    
    $s=mysql_query($sql);
    if($s)
    {
        echo "<script>alert('成功！')</script>";
    }
    
    else{
    
        echo "<script>alert('失败！')</script>";
    }
    echo"<script>window.location.href='AapplyList1.php';</script>";
    @mysql_free_result($sql);
    mysql_close($conn);
    
    //跳转到学生列表页面teaList.php
    //header("location:applyList1.php");
?>