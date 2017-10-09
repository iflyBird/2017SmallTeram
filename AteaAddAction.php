<?php

     #数据处理页面：从增加页面获取管理员所输入的新员工信息，增加到数组

     #1、获取请求的数据
     
    //$stuID=$_POST["stuID"];
    $teaName=$_POST["teaName"];
    $teaSex=$_POST["teaSex"];
    $teaTel=$_POST["teaTel"];
    $teaYX=$_POST["teaYX"];
    $teaPro=$_POST["teaPro"];
    $teaXueYuan=$_POST["teaXueYuan"];
    $teaPost=$_POST["teaPost"];
    $teaPS=$_POST["teaPS"];
    $teaPwd=$_POST["teaPwd"];
    
 
  
    
    //定义插入数据SQL语句
    $sql = "insert into teacherinfor (teaName,teaSex,teaTel,teaYX,teaPro,teaXueYuan,teaPost,teaPS,teaPwd) values(".$teaName.",'".$teaSex."','". $teaTel."',  '".$teaYX."', '".$teaPro."', '".$teaXueYuan."','".$teaPost."','".$teaPS."', '".$teaPwd."')";
   
       include_once 'conn.php';
    
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
    
    //跳转到学生列表页面teaList.php
   // header("location:teaList1.php");
?>