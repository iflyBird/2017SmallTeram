<?php
#为了避免数据库链接繁琐,直接调用
include "MySqlAdmin.php";
$username=$_POST["admin"];
$password=$_POST["password"];
$IdCard=$_POST["IdCard"];//获取文本框人员情况
session_start();


$query="SELECT*FROM studentinfor where stuID ='$username' and stuPwd='$password'";
$result=mysql_query($query);
$nums=mysql_num_rows($result);//与数据库联系存入密码；
if($IdCard=="学生"){
if($nums>0){
    if("SELECT*FROM studentinfor where stuID='$username' and stuPwd='$password'"){
        if ( strtolower($_POST['Code']) == $_SESSION['auth_code']){
            
            header("location:HomePage.php");
            
        }else{
            header("location:Login.php");
        }

   // echo "<script>alert('账户不正确')</script>";

    $_SESSION["username"]=$username;
    }
    
    

}else{
   
    #print_r("登录名和密码不正确，重新登录");
    
    header("location:Login.php");
    
}
}if($IdCard=="教师"){
    $query="SELECT*FROM teacherinfor where teaId ='$username' and teaPwd='$password'";
    $result=mysql_query($query);
    $nums=mysql_num_rows($result);
    //第一次直接注册，数据存入数据库，下一次再直接点击非在校人员进行登陆
    if($nums>0){
        if("SELECT*FROM teacherinfor where teaId='$username' and teaPwd='$password'"){
            if ( strtolower($_POST['Code']) == $_SESSION['auth_code']){
    
                header("location:HomePage.php");
    
            }else{
                header("location:Login.php");
            }
    
            // echo "<script>alert('账户不正确')</script>";
    
            $_SESSION["username"]=$username;
            $_SESSION["IdCard"]=$IdCard;
            
        }
    
    
    
    }else{
   
    #print_r("登录名和密码不正确，重新登录");
    
    header("location:Login.php");
    
}
    
    
}if($IdCard=="管理员"){
    $query="SELECT*FROM manageinfor where manId ='$username' and manPwd='$password'";
    $result=mysql_query($query);
    $nums=mysql_num_rows($result);
    //第一次直接注册，数据存入数据库，下一次再直接点击非在校人员进行登陆
    if($nums>0){
        if("SELECT*FROM manageinfor where manId='$username' and manPwd='$password'"){
            if ( strtolower($_POST['Code']) == $_SESSION['auth_code']){
    
                header("location:HomePage.php");
    
            }else{
                header("location:Login.php");
            }
    
            // echo "<script>alert('账户不正确')</script>";
    
            $_SESSION["username"]=$username;
            $_SESSION["IdCard"]=$IdCard;
        }
    
    
    
    }else{
   
    #print_r("登录名和密码不正确，重新登录");
    
    header("location:Login.php");
    
}
    
 
    
}if($IdCard=="非在校学生"){
    $query="SELECT*FROM outpeo where outName ='$username' and outPwd='$password'";
    $result=mysql_query($query);
    $nums=mysql_num_rows($result);
    //第一次直接注册，数据存入数据库，下一次再直接点击非在校人员进行登陆
    if($nums>0){
        if("SELECT*FROM outpeo where outName='$username' and outPwd='$password'"){
            if ( strtolower($_POST['Code']) == $_SESSION['auth_code']){
    
                header("location:HomePage.php");
    
            }else{
                header("location:Login.php");
            }
    
            // echo "<script>alert('账户不正确')</script>";
    
            $_SESSION["username"]=$username;
        }
    
    
    
    }else{
   
    #print_r("登录名和密码不正确，重新登录");
    
    header("location:Login.php");
    
}
  
    
    
}


mysql_free_result($result);


?>



