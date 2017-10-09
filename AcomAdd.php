<html>
<head>

    <meta charset="utf-8">
    <title>新增</title>
   <style type="text/css">

        #outer {
				width: 380px;
				height: 750px;
				margin-top: 20px;
				background-color: lightskyblue;
				font-family: "微软雅黑";
			}
			
	  #xinzeng {
				margin-left: 20px;
	  	        position: absolute;
				font-family: "微软雅黑";
	  	       font-size: 15px;
	  	        color:blue;
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
<body background="img/pb2.jpg">
<div id="outer" style="text-align: center;" class="obj  box-shadow">
    <form action="AcomAddAction.php" method="post">
        <p id="xinzeng">新增学生</p>
        <table style="width:302px;">
            <br/>
             
            <hr id="line"/>
            <br/>
            
            <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;赛事名：</td>
                <td ><input type="text" name="comName" ></td>
            </tr>
            <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;赛事信息：</td>
                <td ><input type="text" name="comInfor" ></td>
            </tr>
           <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;赛事时间：</td>
                <td ><input type="text" name="comTime" ></td>
            </tr>
            <tr>
            
            <td align='right' >&nbsp;&nbsp;&nbsp;&nbsp;赛事水平：</td>
                <td align='right'>
                <select name="comLever" style="width: 150px;">    
            
			<option  value="国家级">国家级</option>
			<option  value="省级">省级</option>
			<option  value="市级">市级</option>
			<option  value="校级">校级</option>
			<option  value="系级">系级</option>
			<option  value="社团级">社团级</option>
			
			</select>      
 
            </tr>
            
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;赛事举办方：</td>
                <td><input type="text" name="comSponsor" ></td>
            </tr>
           
            
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;负责人编号：</td>
                <td><input type="text" name="ID" ></td>
            </tr>
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;开始时间：</td>
                <td><input type="text" name="startTime" ></td>
            </tr>
             <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;结束时间：</td>
                <td><input type="text" name="overTime" ></td>
            </tr>
           
            
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;地点：</td>
                <td><input type="text" name="comPlace" ></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;申请信息：</td>
                <td><input type="text" name="comAppInfor" ></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;总结：</td>
                <td><input type="text" name="comSum" ></td>
            </tr>
             <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;预算：</td>
                <td><input type="text" name="comAud" ></td>
            </tr>
            
           <br/>
            <tr>
                <td colspan="2" >
        <input id="btn" type="button" value="返回" onclick="window.location.href='AcomList1.php'"><input id="btn" type="submit" value="添加" >
                </td>
            </tr>
        
        </table>
        
    
    </form>
   </div>   
</body>
</html>