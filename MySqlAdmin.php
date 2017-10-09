<?php
#1创建管理员用户账号和密码
#2初始化账号密码
$connId=mysql_connect("localhost","root");
if($connId){
    mysql_select_db("dcms");
  //  echo "ss";
    
}else{
    die("连接出错,退出当前程序".mysql_error());
}


?>
