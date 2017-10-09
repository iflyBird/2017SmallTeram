<?php 
    $appID=$_GET["appID"];
       include_once 'conn.php';
    $sql = "select * from enlistresult where appID=".$appID;
    
    $result = mysql_query($sql);
    
    $app = mysql_fetch_array($result);

?>
<html>
<head>

    <meta charset="utf-8">
    <title>修改</title>
   <style type="text/css">

        #outer {
				width: 380px;
				height: 450px;
				margin-top: 20px;
				background-color: lightskyblue;
				font-family: "微软雅黑";
			}
			
	  #xiugai {
				margin-left: 15px;
	  	        position: absolute;
				font-family: "微软雅黑";
	  	        font-size: 15px;
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
    <form action="AapplyModifyAction.php"method="post">
    <p id="xiugai">修改申请</p>
     <table style="width:302px;">
     <br/>
             
            <hr id="line"/>
            <br/>
           
            <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;申请编号：</td>
                <td ><input type="text" name="appID" value="<?php echo $app['appID'] ?>" readonly style="color: gray" ></td>
            </tr> 
             <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;项目编号：</td>
                <td ><input type="text" name="comID" value="<?php echo $app['comID'] ?>" readonly style="color: gray" ></td>
            </tr> 
            <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;团队编号：</td>
                <td ><input type="text" name="teamID" value="<?php echo $app['teamID'] ?>" readonly style="color: gray" ></td>
            </tr>
             <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;指导老师编号：</td>
                <td ><input type="text" name="teaID" value="<?php echo $app['teaID'] ?>"  ></td>
            </tr>     
            
              
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;备注：</td>
                <td><input type="text" name="elseInfor" value="<?php echo $app ['elseInfor'] ?>" ></td>
            </tr>
           <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;申请状态：</td>
                <td align='right' value="<?php echo $app ['state'] ?>" >
                <select name="state" style="width: 150px;">
                     
                    
                        <option value="待审">待审</option>
                        <option value="不通过">不通过</option>
                    </select>
                
                
                
                
                </td>
            </tr>
 
            <tr>
                <td colspan="2" >
        <input id="btn" type="button" value="返回" onclick="window.location.href='AapplyList1.php'"><input id="btn" type="submit" value="修改" >
                </td>
            </tr>
        
        </table>
       
        
    
    </form>
    </div>  
</body>
</html>