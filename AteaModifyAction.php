<?php

     #数据处理页面：从修改页面获取管理员所输入修改后员工信息，更新到数组

     #1、获取请求的数据
     
    $teaID=$_POST["teaID"];
    $teaName=$_POST["teaName"];
    $teaSex=$_POST["teaSex"];
    //$years=$_POST["years"];
   // $months=$_POST["months"];
   // $days=$_POST["days"];
    //$teaBirth=$years.$months.$days;
    $teaTel=$_POST["teaTel"];
   
    $teaYX=$_POST["teaYX"];
    $teaPro=$_POST["teaPro"];
    $teaXueYuan=$_POST["teaXueYuan"];
    $teaPost=$_POST["teaPost"];
    $teaPS=$_POST["teaPS"];
    $teaPwd=$_POST["teaPwd"];
    
    
    
       include_once 'conn.php';
    $sql = "update teacherinfor set teaName='".$teaName."',teaSex='".$teaSex."',teaTel='".$teaTel."',  teaYX='".$teaYX."',teaPro='".$teaPro."', teaXueYuan='".$teaXueYuan."', teaPost='".$teaPost."',teaPS='".$teaPS."',teaPwd='".$teaPwd."' where teaID=".$teaID;                           
    
    //$s=var_dump($sql);
    //echo  $s;
    //echo $sql;
    
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
   // header("location:teaList1.php");
?>