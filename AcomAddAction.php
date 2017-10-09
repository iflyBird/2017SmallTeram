<?php

     #数据处理页面：从增加页面获取管理员所输入的新员工信息，增加到数组

     #1、获取请求的数据
     
    
    $comName=$_POST["comName"];
    $comInfor=$_POST["comInfor"];
    $comTime=$_POST["comTime"];
    $comLever=$_POST["comLever"];
    $comSponsor=$_POST["comSponsor"];
    $ID=$_POST["ID"];
    $startTime=$_POST["startTime"];
    $overTime=$_POST["overTime"];
    $comPlace=$_POST["comPlace"];
    $comAppInfor=$_POST["comAppInfor"];
    $comSum=$_POST["comSum"];
    $comAud=$_POST["comAud"];
   

    
    //定义插入数据SQL语句
    $sql = "insert into contestinfor (comName,comInfor,comTime,comLever,comSponsor,ID,startTime,overTime,comPlace,comAppInfor,comSum,comAud) values(".$comName.",'".$comInfor."','". $comTime."','". $comLever."', '".$comSponsor."', '".$ID."', '".$startTime."', '".$overTime."', '".$comPlace."', '".$comAppInfor."', '".$comSum."', '".$comAud."')";
   
       include_once 'conn.php';
    
    $s=mysql_query($sql);
    
    if($s)
    {
        echo "<script>alert('成功！')</script>";
    }
    
    else{
    
        echo "<script>alert('失败！')</script>";
    }
    echo"<script>window.location.href='AcomList1.php';</script>";
    @mysql_free_result($sql);
    mysql_close($conn);
    
    
    //跳转到学生列表页面stuList.php
   // header("location:comList1.php");
?>