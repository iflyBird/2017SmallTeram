<!DOCTYPE html>
<html>
<head>
 	<title>注册页面</title>
 	<style>
body{
	
	
	background:#B1D2EC;

}
#admin,#password,#passQue,#passAn{
	width: 260px;
	height:40px;
	border-radius:5px 5px 5px 5px;
	border:1px;	
	
	
}
#denglu,#shuaxin{
	border-radius:5px 5px 5px 5px;
	width:60px;
	height:40px;
	margin:20px;
	background:white;
	color:#B1D2EC;
	font-weight:bolder;"

}
#admin{
	background-image:url(img/用户.png);
	background-repeat:no-repeat;
	background-size:30px,10px;
	background-position:left center;
	padding: 5px 30px 5px 27px;
	background-color: ;

}
#password{
	background-image:url(img/密码.png);
	background-repeat:no-repeat;
	background-size:27px,10px;
	background-position:left center;
	padding: 5px 30px 5px 27px;
	background-color: ;
}



</style>
 	<script type="text/javascript" src="js/ZhuCe.js"></script>
 	
 	
</head>
<body style="background-image: url(img/background.jpg);background-repeat: no-repeat;background-size: cover;">
	<form action="YanZhen.php" method="post">	
	
<!--------------------正文标题-------------------->
	<h2 align="center">用户注册</h2>
	
	<input type="hidden" name="compId" value="用户注册" />
	
	<!-- 输入姓名  -->
	<p align="center">
			<input type="text" name="zhuce_admin" id="admin" placeholder="Username"/>
	<!-- 输入密码  -->		
	<p align="center">
		     <input type="password" name="zhuce_password" id="password"placeholder="Password"style="width: 260px;height:40px;border-radius:5px 5px 5px 5px;border:1px;	"/>	
	
	</p>
	
	<!-- 选择性别  -->	
	<div align="center">
	<label for="man"> 
	<span style="font-size:28px;">男 </span>
<input type="radio" value="" name="man" id="man" style="margin-right:80px;" checked="checked"/> 

</label> 
<label for="man2" style="font-size:20px;"> 

<span style="font-size:28px;">女 </span><input type="radio" value="" name="man" id="man2"/> 

</label> 
	
	</div>
	

	
	<!-- 设置出生日期  -->
	<p align="center">
		
			<select name="years" id= "years"style="font-size:20px;padding:8px;border-radius :5px 5px 5px 5px; margin-left:110px;">
			<option value="请选择">请选择</option>
			<option onclick="check()" value="1960">1960</option>
			<option onclick="check()" value="1961">1961</option>
			<option onclick="check()" value="1962">1962</option>
			<option onclick="check()" value="1963">1963</option>
			<option onclick="check()" value="1964">1964</option>
			<option onclick="check()" value="1965">1965</option>
			<option onclick="check()" value="1966">1966</option>
			<option onclick="check()" value="1967">1967</option>
			<option onclick="check()" value="1968">1968</option>
			<option onclick="check()" value="1969">1969</option>
			<option onclick="check()" value="1970">1970</option>
			<option onclick="check()" value="1971">1971</option>
			<option onclick="check()" value="1972">1972</option>
			<option onclick="check()" value="1973">1973</option>
			<option onclick="check()" value="1974">1974</option>
			<option onclick="check()" value="1975">1975</option>
			<option onclick="check()" value="1976">1976</option>
			<option onclick="check()" value="1977">1977</option>
			<option onclick="check()" value="1978">1978</option>
			<option onclick="check()" value="1979">1979</option>
			<option onclick="check()" value="1980">1980</option>
			<option onclick="check()" value="1981">1981</option>
			<option onclick="check()" value="1982">1982</option>
			<option onclick="check()" value="1983">1983</option>
			<option onclick="check()" value="1984">1984</option>
			<option onclick="check()" value="1985">1985</option>
			<option onclick="check()" value="1986">1986</option>
			<option onclick="check()" value="1987">1987</option>
			<option onclick="check()" value="1988">1988</option>
			<option onclick="check()" value="1989">1989</option>
			<option onclick="check()" value="1990">1990</option>
			<option onclick="check()" value="1991">1991</option>
			<option onclick="check()" value="1992">1992</option>
			<option onclick="check()" value="1993">1993</option>
			<option onclick="check()" value="1994">1994</option>
			<option onclick="check()" value="1995">1995</option>
			<option onclick="check()" value="1996">1996</option>
			<option onclick="check()" value="1997">1997</option>
			<option onclick="check()" value="1998">1998</option>
			<option onclick="check()" value="1999">1999</option>
			<option onclick="check()" value="2000">2000</option>
			<option onclick="check()" value="2001">2001</option>
			<option onclick="check()" value="2002">2002</option>
			<option onclick="check()" value="2003">2003</option>
			<option onclick="check()" value="2004">2004</option>
			<option onclick="check()" value="2005">2005</option>
			<option onclick="check()" value="2006">2006</option>
			<option onclick="check()" value="2007">2007</option>
			<option onclick="check()" value="2008">2008</option>
			<option onclick="check()" value="2009">2009</option>
			<option onclick="check()" value="2010">2010</option>
			<option onclick="check()" value="2011">2011</option>
			<option onclick="check()" value="2012">2012</option>
			<option onclick="check()" value="2013">2013</option>
			<option onclick="check()" value="2014">2014</option>
			<option onclick="check()" value="2015">2015</option>
			<option onclick="check()" value="2016">2016</option>
			<option onclick="check()" value="2017">2017</option>
			</select>
			年	
	
	<!-- 设置出生 月  -->
			<select name="month" id="month"style="font-size:18px; padding:8px;border-radius :5px 5px 5px 5px;">
			<option value="请选择">请选择</option>
			<option onclick="check()" value="01">01</option>
			<option onclick="check()" value="02">02</option>
			<option onclick="check()" value="03">03</option>
			<option onclick="check()" value="04">04</option>
			<option onclick="check()" value="05">05</option>
			<option onclick="check()" value="06">06</option>
			<option onclick="check()" value="07">07</option>
			<option onclick="check()" value="08">08</option>
			<option onclick="check()" value="09">09</option>
			<option onclick="check()" value="10">10</option>
			<option onclick="check()" value="11">11</option>
			<option onclick="check()" value="12">12</option>	
			</select>
			月
			
	<!-- 设置出生 日  -->
			<select name="day" id="day"style="font-size:18px;padding:8px; border-radius :5px 5px 5px 5px;">
			<option value="请选择">请选择</option>
			<option onclick="check()" value="01">01</option>
			<option onclick="check()" value="02">02</option>
			<option onclick="check()" value="03">03</option>
			<option onclick="check()" value="04">04</option>
			<option onclick="check()" value="05">05</option>
			<option onclick="check()" value="06">06</option>
			<option onclick="check()" value="07">07</option>
			<option onclick="check()" value="08">08</option>
			<option onclick="check()" value="09">09</option>
			<option onclick="check()" value="10">10</option>
			<option onclick="check()" value="11">11</option>
			<option onclick="check()" value="12">12</option>
			<option onclick="check()" value="13">13</option>
			<option onclick="check()" value="14">14</option>
			<option onclick="check()" value="15">15</option>
			<option onclick="check()" value="16">16</option>
			<option onclick="check()" value="17">17</option>
			<option onclick="check()" value="18">18</option>
			<option onclick="check()" value="19">19</option>
			<option onclick="check()" value="20">20</option>
			<option onclick="check()" value="21">21</option>
			<option onclick="check()" value="22">22</option>
			<option onclick="check()" value="23">23</option>
			<option onclick="check()" value="24">24</option>
			<option onclick="check()" value="25">25</option>
			<option onclick="check()" value="26">26</option>
			<option onclick="check()" value="27">27</option>
			<option onclick="check()" value="28">28</option>
			<option onclick="check()" value="29">29</option>
			<option onclick="check()" value="30">30</option>
			<option onclick="check()" value="31">31</option>
			
			</select>
			日
	</p>
	
	<!-- 设置密保问题  -->
	<p align="center">
			<input type="text" name="passQue" id="passQue"placeholder="密保问题"/>
	
	</p>
	<!-- 设置密保答案  -->
	<p align="center">
		<input type="text" name="passAn" id="passAn"placeholder="密保答案"/>

	</p>
	
	<!--------------------按键-------------------->
	<!-- 1、确定登录 -->
	<p align="center">
		<input type="submit" name="登录"id="denglu" value="注册" onclick="return run()"/>
	<!-- 2、重置按钮 -->
		<input type="button" id="shuaxin"onclick="javascript:window.location.reload() " value="刷新"/>
	</p>
	
</form>	
</body>
</html>