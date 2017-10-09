<?php 
    @$teaID=$_GET["teaID"];
      include_once 'conn.php';
    $sql = "select * from teacherinfor where teaID='$teaID'";
    
    $result = mysql_query($sql);
    
    $tea = mysql_fetch_array($result);

?>
<html>
<head>

    <meta charset="utf-8">
    <title>修改</title>
   <style type="text/css">

        #outer {
				width: 380px;
				height: 440px;
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

             background-repeat:no-repeat ;background-size:100% 100%; background-attachment:fixed;
            
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
<body background="img/pb19.jpg">
<div id="outer" style="text-align: center;" class="obj  box-shadow">
    <form action="AteaModifyAction.php"method="post">
    <p id="xiugai">修改教师</p>
        <table style="width:302px">
            <br/>
             
            <hr id="line"/>
            <br/>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;教师编号：</td>
                <td><input type="text" name="teaID" value="<?php echo $tea['teaID'] ?>" readonly style="color: gray"></td>
            </tr>
            
            <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;教师姓名：</td>
                <td ><input type="text" name="teaName" value="<?php echo $tea['teaName'] ?>"></td>
            </tr>
            <tr>
            <td>性别：</td>
            <td> 
            
           <select name="teaSex" style="width: 150px;" value="<?php echo $tea['teaSex'] ?>">    
            
			<option  value="男">男</option>
			<option  value="女">女</option>
			</select>  
            </td> 
            </tr>
      
            
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;教师电话：</td>
                <td><input type="text" name="teaTel"  value="<?php echo $tea['teaTel'] ?>"></td>
            </tr>
            
            
              
           
            
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;教师邮箱：</td>
                <td><input type="text" name="teaYX"  value="<?php echo $tea['teaYX'] ?>"></td>
            </tr>
           
            
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;教师专业：</td>
                <td><input type="text" name="teaPro" value="<?php echo $tea['teaPro'] ?>"></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;教师学院：</td>
                <td><input type="text" name="teaXueYuan"  value="<?php echo $tea['teaXueYuan'] ?>"></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;教师职务：</td>
                <td><input type="text" name="teaPost"  value="<?php echo $tea['teaPost'] ?>"></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;教师备注：</td>
                <td><input type="text" name="teaPS"  value="<?php echo $tea['teaPS'] ?>"></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;密码：</td>
                <td><input type="text" name="teaPwd"  value="<?php echo $tea['teaPwd'] ?>"></td>
            </tr>
            
           
            <tr>
                <td colspan="2" >
        <input id="btn" type="button" value="返回" onclick="window.location.href='AteaList1.php'"><input id="btn" type="submit" value="修改" >
                </td>
            </tr>
        
        </table>
       
        
    
    </form>
    </div>  
</body>
</html>