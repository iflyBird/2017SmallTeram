<?php

     #数据处理页面：从修改页面获取管理员所输入修改后员工信息，更新到数组

     #1、获取请求的数据
     
    $stuID=$_POST["stuID"];
    $stuName=$_POST["stuName"];
    $stuSex=$_POST["stuSex"];
    $years=$_POST["years"];
    $months=$_POST["months"];
    $days=$_POST["days"];
    $stuBirth=$years.$months.$days;
    $stuTel=$_POST["stuTel"];
    $stuClass=$_POST["stuClass"];
    $stuYX=$_POST["stuYX"];
    $stuPro=$_POST["stuPro"];
    $stuXueYuan=$_POST["stuXueYuan"];
    $stuPwd=$_POST["stuPwd"];
    
    
    
      include_once 'conn.php';
    $sql = "update studentinfor set stuName='".$stuName."',stuSex='".$stuSex."',stuBirth='".$stuBirth."',stuTel='".$stuTel."', stuClass='".$stuClass."', stuYX='".$stuYX."',stuPro='".$stuPro."', stuXueYuan='".$stuXueYuan."', stuPwd='".$stuPwd."' where stuID=".$stuID;                           
    
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
    echo"<script>window.location.href='AstuList1.php';</script>";
    @mysql_free_result($sql);
    mysql_close($conn);
    
    //跳转到学生列表页面stuList1.php
    //header("location:stuList1.php");
?>