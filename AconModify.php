<?php 
    $bianhao=$_GET["bianhao"];
     include_once 'conn.php';
    $sql = "select * from comresult where bianhao=".$bianhao;
    
    $result = mysql_query($sql);
    
    $con = mysql_fetch_array($result);

?>
<html>
<head>

    <meta charset="utf-8">
    <title>修改</title>
   <style type="text/css">

        #outer {
				width: 340px;
				height: 350px;
				margin-top: 20px;
				background-color: lightskyblue;
				font-family: "微软雅黑";
			}
			
	  #xiugai {
				margin-left: 15px;
	  	        position: absolute;
				font-family: "微软雅黑";
	  	        font-size: 15px;
	  	        color:blue;
			}

             
            
a{
	         text-decoration: none;
			 font-style: oblique;
			 font-size: large;	
			}
			a:link{
	         color:black;
			}
			a:visited{
	        color:blue;
			}
			a:hover{
	        color:red;
			}
      body
        {     
        	
            background-repeat:no-repeat ;background-size:100% 100%; background-attachment:fixed;
        	FONT-FAMILY: "黑体";
        	FONT-SIZE: 12px;
        	text-decoration: none;
        	line-height: 150%;
        	margin-left: 35%;
        	margin-top: 40px;
        
        }
        
        #line {
				width: 340px;
				position: relative;
				margin-top: 15px;
				border-color: #F4F4F4;
				font-family: "微软雅黑";
			}
			td{
				
				text-align: right;
				
				height:30px;
			}
			
        #btn {
				margin-top: 20px;
				margin-left: 10px;
				font-family: "微软雅黑";
				width: 100px;
				height: 35px;
				background-color: pink;
				font-size: 20px;
				
			}
    </style> 
    </head>
<body background="img/pb18.jpg">
<div id="outer" style="text-align: center;" class="obj  box-shadow">
    <form action="AconModifyAction.php"method="post">
    <p id="xiugai">修改成绩</p>
     <table style="width:302px;">
     <br/>
             
            <hr id="line"/>
            <br/>
            <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;编号：</td>
                <td ><input type="text" name="bianhao" value="<?php echo $con['bianhao'] ?>" readonly style="color: gray" ></td>
            </tr> 
            <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;申请编号：</td>
                <td ><input type="text" name="appID" value="<?php echo $con['appID'] ?>" readonly style="color: gray" ></td>
            </tr> 
             <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;成绩：</td>
                <td ><input type="text" name="grade" value="<?php echo $con['grade'] ?>"  ></td>
            </tr>     
            
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;排名：</td>
                <td><input type="text" name="rank" value="<?php echo $con['rank'] ?>" ></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;备注：</td>
                <td align='right' >
     
                <select name="elseInfor" style="width: 150px;" value="<?php echo $con['elseInfor'] ?>">    
            
			<option  value="待审">待审</option>
			<option  value="鼓励奖">鼓励奖</option>
			</select>    
                
                
                </td>
            </tr>
           
 
            <tr>
                <td colspan="2" >
        <input id="btn" type="button" value="返回" onclick="window.location.href='AconList1.php'"><input id="btn" type="submit" value="修改" >
                </td>
            </tr>
        
        </table>
       
        
    
    </form>
    </div>  
</body>
</html>