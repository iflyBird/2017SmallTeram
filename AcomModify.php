<?php 
    $comID=$_GET["comID"];
      include_once 'conn.php';
    $sql = "select * from contestinfor where comID=".$comID;
    
    $result = mysql_query($sql);
    
    $com = mysql_fetch_array($result);

?>
<html>
<head>

    <meta charset="utf-8">
    <title>修改</title>
   <style type="text/css">

        #outer {
				width: 380px;
				height: 780px;
				margin-top: 20px;
				background-color: lightskyblue;
				font-family: "微软雅黑";
			}
			
	  #xiugai {
				margin-left: 15px;
	  	        position: absolute;
				font-family: "微软雅黑";
	  	        font-size: 15px;
	  	        color:orangered;
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
<body background="img/pb16.jpg">
<div id="outer" style="text-align: center;" class="obj  box-shadow">
    <form action="AcomModifyAction.php"method="post">
    <p id="xiugai">修改赛事</p>
         <table style="width:302px;">
            <br/>
             
            <hr id="line"/>
            <br/>
            <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;赛事编号：</td>
                <td ><input type="text" name="comID" value="<?php echo $com['comID'] ?>" readonly style="color: gray"></td>
            </tr>
            <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;赛事名：</td>
                <td ><input type="text" name="comName" value="<?php echo $com['comName'] ?>"></td>
            </tr>
            <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;赛事信息：</td>
                <td ><input type="text" name="comInfor" value="<?php echo $com['comInfor'] ?>"></td>
            </tr>
           <tr>
                <td align="right">&nbsp;&nbsp;&nbsp;赛事时间：</td>
                <td ><input type="text" name="comTime" value="<?php echo $com['comTime'] ?>"></td>
            </tr>
            <tr>
            
            <td align='right' >&nbsp;&nbsp;&nbsp;&nbsp;赛事水平：</td>
                <td align='right'>
                <select style="width: 150px;" name="comLever" value="<?php echo $com['comLever'] ?>">    
            
			  
            
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
                <td><input type="text" name="comSponsor" value="<?php echo $com['comSponsor'] ?>"></td>
            </tr>
           
            
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;负责人编号：</td>
                <td><input type="text" name="ID" value="<?php echo $com['ID'] ?>"></td>
            </tr>
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;开始时间：</td>
                <td><input type="text" name="startTime" value="<?php echo $com['startTime'] ?>"></td>
            </tr>
             <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;结束时间：</td>
                <td><input type="text" name="overTime" value="<?php echo $com['overTime'] ?>"></td>
            </tr>
           
            
              <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;地点：</td>
                <td><input type="text" name="comPlace" value="<?php echo $com['comPlace'] ?>"></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;申请信息：</td>
                <td><input type="text" name="comAppInfor" value="<?php echo $com['comAppInfor'] ?>"></td>
            </tr>
            <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;总结：</td>
                <td><input type="text" name="comSum" value="<?php echo $com['comSum'] ?>"></td>
            </tr>
             <tr>
                <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;预算：</td>
                <td><input type="text" name="comAud" value="<?php echo $com['comAud'] ?>"></td>
            </tr>
            
           
            <tr>
                <td colspan="2" >
        <input id="btn" type="button" value="返回" onclick="window.location.href='AcomList1.php'"><input id="btn" type="submit" value="修改" >
                </td>
            </tr>
        
        </table>
       
        
    
    </form>
    </div>  
</body>
</html>