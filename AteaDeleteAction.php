<?php

    $teaID=$_GET["teaID"];
  
    //构建删除语句
    $sql = "delete from teacherinfor where teaID=".$teaID;
    
    //连接数据库服务器
      include_once 'conn.php';
    
    //执行删除语句
    $s=mysql_query($sql);
    if($s)
    {
        echo "<script>alert('成功！')</script>";
    }
    
    else{
    
        echo "<script>alert('失败！')</script>";
    }
    echo"<script>window.location.href='AteaList1.php';</script>";
    @mysql_free_result($sql);
    mysql_close($conn);
    
    //跳转到学生列表页面stuList1.php
    //header("location:teaList1.php");
    
   ?>
