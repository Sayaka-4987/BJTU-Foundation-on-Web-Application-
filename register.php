<!DOCTYPE html> 
<html> 
<head>
<style>
@import url("css/CSS固定底部导航栏.css");
.box{
	text-align:center;
	box-sizing:border-box;
	background-color:rgba(0, 0, 0, 0.47);
	width: 100%; 
	color:#FFF;
	font-weight:bold
	}
</style>

<meta http-equiv="refresh" content="5;url=register.html">
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","12345678");//链接数据库，注意该php版本的链接语句是mysqli_connect（）
$name=$_POST['username'];
$password=$_POST['password'];//通过post方式获取表单数据并存入到$name,$password变量中
if(!$con)
{
  die('连接MySQL数据库失败！ ' . mysql_error());
}
mysqli_select_db($con,"account"); //注意语法mysqli_select_db(connection,dbname);
mysqli_query($con,"INSERT INTO users(name,password) VALUES('$name','$password')"); //注意使用mysqli的相关函数都要加链接数据库的变量
echo "您的用户名是：".$_POST['username']."<br/>";
echo "您的密码是：".$_POST['password']."<br/>";
mysqli_close($con);  //函数中要加入参数
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