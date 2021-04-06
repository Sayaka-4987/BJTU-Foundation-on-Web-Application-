<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>写留言</title>
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
$name = $_POST['username'];
$email = $_POST['email'];
$txt = $_POST['txt'];
$con = mysqli_connect("localhost","root","12345678");
if (!$con)
{
  die('连接MySQL数据库失败！ ' . mysqli_error());
}
mysqli_query($con, "set names utf8");
$sql="INSERT INTO messageboard.visitor(name, email, txt) VALUES ('".$name."', '".$email."', '".$txt."');";
//mysqli_query($con, "INSERT INTO ...;");
$res=mysqli_query($con, $sql);
if(!$res)
{
	die('<br>添加数据失败！<br>' . mysqli_error());
}
else
{
	echo "<br>留言已成功发布！<br/><br/>";
}
mysqli_close($con);
?>
</div>
</body>
</html>