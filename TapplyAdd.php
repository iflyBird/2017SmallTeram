<html>
<head>

    <meta charset="utf-8">
    <title>新增</title>
   <style type="text/css">

        #outer {
				width: 380px;
				height: 400px;
				margin-top: 100px;
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
 background-repeat:no-repeat ;
 background-size:100% 100%; 
 background-attachment:fixed;
            
        	
            
            
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
<div id="outer"  align="center">
    <form action="TapplyAddAction.php" method="post">
        <p id="xinzeng">新增申请信息</p>
        <table style="width:302px;">
            <br />
             
            <hr id="line"/>
            <br/>
      
      
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;项目编号：</td>
                <td ><input type="text" name="comID" ></td>
            </tr>     
            
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;团队编号：</td>
                <td><input type="text" name="teamID" ></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;指导老师编号：</td>
                <td><input type="text" name="teaID" ></td>
            </tr>
             <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;备注：</td>
                <td><input type="text" name="elseInfor" ></td>
            </tr>
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;申请状态：</td>
                <td align='right' >
                <select name="state" style="width: 150px;">
                     
                    
                        <option value="待审">待审</option>
                        <option value="不通过">不通过</option>
                       
           
             
                    </select>
                
                
                
                
                </td>
            </tr>
            
 
            <tr>
                <td colspan="2" >
        <input id="btn" type="button" value="返回" onclick="window.location.href='TapplyList1.php'"><input id="btn" type="submit" value="添加" >
                </td>
            </tr>
        
        </table>
        
    
    </form>
   </div>   
</body>
</html>