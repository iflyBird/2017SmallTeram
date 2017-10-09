<?php

     #数据处理页面：从增加页面获取管理员所输入的新员工信息，增加到数组

     #1、获取请求的数据
     
   
    $appID=$_POST["appID"];
    $grade=$_POST["grade"];
    $rank=$_POST["rank"];
    $elseInfor=$_POST["elseInfor"];
    
 
  
    
    //定义插入数据SQL语句
    $sql = "insert into comresult (appID,grade,rank,elseInfor) values(".$appID.",'".$grade."','". $rank."','". $elseInfor."')";                                
   
       include_once 'conn.php';
    
    $s=mysql_query($sql);
    if($s)
    {
        echo "<script>alert('成功！')</script>";
    }
    
    else{
    
       echo "<script>alert('失败！')</script>";
    }
    echo"<script>window.location.href='AconList1.php';</script>";
    @mysql_free_result($sql);
    mysql_close($conn);
    
    
    //跳转到学生列表页面teaList.php
   // header("location:conList1.php");
?>