<?php

     #数据处理页面：从修改页面获取管理员所输入修改后员工信息，更新到数组

     #1、获取请求的数据
     
    
     $bianhao=$_GET["bianhao"];
     $elseInfor="获奖";
   
    
    
    include_once 'conn.php';
    $sql = "update comresult set elseInfor='".$elseInfor."' where bianhao=".$bianhao;                           
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
    echo"<script>window.location.href='AconList1.php';</script>";
    @mysql_free_result($sql);
    mysql_close($conn);
    
    

    //跳转到学生列表页面stuList1.php
   // header("location:conList1.php");
?>