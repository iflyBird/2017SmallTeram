<?php

     #数据处理页面：从修改页面获取管理员所输入修改后员工信息，更新到数组

     #1、获取请求的数据
     
    
     $appID=$_GET["appID"];
     $state="通过";
   
    
    
    include_once 'conn.php';
    $sql = "update enlistresult set state='".$state."' where appID=".$appID;                           
   // $s=mysql_query($sql);
   // var_dump($s);
   $s= mysql_query($sql);
    if($s)
    {
        echo "<script>alert('成功！')</script>";
    }
    
    else{
    
        echo "<script>alert('失败！')</script>";
    }
    echo"<script>window.location.href='TapplyList1.php';</script>";
    @mysql_free_result($sql);
    mysql_close($conn);
    
    

    //跳转到学生列表页面stuList1.php
   // header("location:applyList1.php");
?>