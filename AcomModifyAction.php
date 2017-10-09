<?php

     #数据处理页面：从修改页面获取管理员所输入修改后员工信息，更新到数组

     #1、获取请求的数据
     
    $comID=$_POST["comID"];
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
    
    
    
      include_once 'conn.php';
    $sql = "update contestinfor set comName='".$comName."',comInfor='".$comInfor."',comTime='".$comTime."',comLever='".$comLever."', comSponsor='".$comSponsor."', ID='".$ID."',startTime='".$startTime."', overTime='".$overTime."', comPlace='".$comPlace."', comAppInfor='".$comAppInfor."', comSum='".$comSum."', comAud='".$comAud."' where comID=".$comID;                           
    //echo $sql ;
    
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
    echo"<script>window.location.href='AcomList1.php';</script>";
    @mysql_free_result($sql);
    mysql_close($conn);
    
   // header("location:comList1.php");
?>