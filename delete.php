<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>删除指定数据</title>
<style type="text/css">
@import url("css/CSS固定底部导航栏.css");
@import url("css/闪烁渐变标题.css");
.lightgrey2em{
	background-color:rgba(200, 200, 200, 0.47);
	text-indent:2em;
}
</style>
</head>

<body background="img/classroom.jpg">

<div class="lightgrey2em">
<?php
$ID = $_POST['studentID'];
$con = mysqli_connect("localhost","root","12345678");
if (!$con)
{
  die('连接MySQL数据库失败！ ' . mysqli_error());
}
mysqli_query($con, "set names utf8");
$sql="DELETE FROM students.class1 WHERE ID=".$ID.";";
//mysqli_query($con, "INSERT INTO ...;");
$res=mysqli_query($con, $sql);
if(!$res)
{
	die('删除数据失败！ ' . mysqli_error());
}
else
{
	echo "<h1 style='font-weight:bold'>已成功删除学号为：".$ID."的学生信息。<br/></h1>";
	echo "<script language=javascript>setTimeout( function(){window.history.back(-1);}, 3000);</script>";
}

mysqli_close($con);
?>
</div>
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