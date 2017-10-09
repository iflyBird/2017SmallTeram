<html>
<head>

    <meta charset="utf-8">
    <title>新增</title>
   <style type="text/css">

        #outer {
				width: 348px;
				height: 300px;
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
<body background="img/pb17.jpg">
<div id="outer" style="text-align: center;" class="obj  box-shadow">
    <form action="AteamAddAction.php" method="post">
        <p id="xinzeng">新增团队</p>
        <table style="width:302px;">
            <br/>
             
            <hr id="line"/>
            <br/>
            
            <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;团队名：</td>
                <td ><input type="text" name="teamName" ></td>
            </tr>     
            
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;队长编号：</td>
                <td><input type="text" name="captainID" ></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;队员1编号：</td>
                <td><input type="text" name="member1ID" ></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;队员2编号：</td>
                <td><input type="text" name="member2ID" ></td>
            </tr>
 
            <tr>
                <td colspan="2" >
        <input id="btn" type="button" value="返回" onclick="window.location.href='AteamList1.php'"><input id="btn" type="submit" value="添加" >
                </td>
            </tr>
        
        </table>
        
    
    </form>
   </div>   
</body>
</html>