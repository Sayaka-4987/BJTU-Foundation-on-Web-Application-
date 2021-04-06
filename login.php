<!DOCTYPE html>
<html> 
<head>
<style>
@import url("css/CSS固定底部导航栏.css");
.box{
	text-align:center;
	border: 1px   solid  #FFFFFF;
	box-sizing:border-box;
	background-color:rgba(0, 0, 0, 0.47);
	width: 100%; 
	color:#FFF;
	font-weight:bold
	}
</style>

<meta http-equiv="refresh" content="5;url=class1info.php">
</head>
<body background="img/classroom.jpg"> 
<?php
     $name=$_POST['username'];
     $password=$_POST['password'];
     $con = mysqli_connect("localhost","root","12345678");//链接数据库
     if (!$con)
     {die('连接MySQL数据库失败！'. mysql_error());}
	 mysqli_select_db($con,"account");
     $sql="SELECT * FROM account.users WHERE name="."'".$name."'"." AND password="."'".$password."'";
	 $result=mysqli_query($con, "$sql;");
     //原：$result=$con->query($sql);
	 $num_users=mysqli_num_rows($result);
     //原：$num_users=$result->num_rows;//在数据库中搜索到符合的用户
	 if($num_users!=0)//搜索到该用户
	 {echo "<div class='box'><h3><br>{$name}&nbsp, 欢迎您！稍后将自动跳转到班级名单...<br><br></div>";}
	 else
	 {echo "<div class='box'><h3><br>用户名或密码错误, 请重试！</h3><br></div>";
	 echo "<script language=javascript>setTimeout( function(){window.history.back(-1);}, 3000);</script>";}
?>

<div class="navbar">
  <a href="index.html">主页</a>
  <a href="news.html">最新活动</a>
  <a href="login.html">用户登录</a>
  <a href="register.html">用户注册</a>
  <a href="game.html">FLASH游戏</a>
  <a href="about.html">关于作者</a>
</div>
</body> 
</html>