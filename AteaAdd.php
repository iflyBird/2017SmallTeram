<html>
<head>

    <meta charset="utf-8">
    <title>新增</title>
   <style type="text/css">

        #outer {
				width: 340px;
				height: 440px;
				margin-top: 20px;
				background-color: lightskyblue;
				font-family: "微软雅黑";
        	    text-align:right;
			}
			
	  #xinzeng {
				margin-left: 20px;
	  	        position: absolute;
				font-family: "微软雅黑";
	  	       font-size: 15px;
	  	        color:red;
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
				margin-top: 20px;
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
				width: 120px;
				height: 35px;
				background-color: pink;
				font-size: 20px;
				border:1px;
			}
    </style> 
    
    

</head>
<body background="img/pb19.jpg">
<div id="outer" style="text-align: center;" class="obj  box-shadow">
    <form action="AteaAddAction.php" method="post">
        <p id="xinzeng">新增老师</p>
        <table style="width:304px;">
            <br/>
             
            <hr id="line"/>
            <br/>
            
            <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;教师姓名：</td>
                <td ><input type="text" name="teaName" ></td>
            </tr>
            <tr>
            <td>性别：</td>
            
          
     <td >
                <select name="teaSex" style="width: 150px;">    
            
			<option  value="男">男</option>
			<option  value="女">女</option>
			</select>    
                </td>
           
            </tr>
            <tr>
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;教师电话：</td>
                <td><input type="text" name="teaTel" ></td>
            </tr>
           
            
           
           
            
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;教师邮箱：</td>
                <td><input type="text" name="teaYX" ></td>
            </tr>
            
            
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;教师专业：</td>
                <td><input type="text" name="teaPro" ></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;教师学院：</td>
                <td><input type="text" name="teaXueYuan" ></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;教师职务：</td>
                <td><input type="text" name="teaPost" ></td>
            </tr>
             <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;教师备注：</td>
                <td><input type="text" name="teaPS" ></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;密码：</td>
                <td><input type="text" name="teaPwd" ></td>
            </tr>
            
           
            <tr>
                <td colspan="2" >
        <input id="btn" type="button" value="返回" onclick="window.location.href='AteaList1.php'"><input id="btn" type="submit" value="添加" >
                </td>
            </tr>
        
        </table>
        
    
    </form>
   </div>   
</body>
</html>