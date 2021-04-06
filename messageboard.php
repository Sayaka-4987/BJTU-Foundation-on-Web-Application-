<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
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
$con = mysqli_connect("localhost","root","12345678");
if (!$con)
  {
  die('连接MySQL数据库失败！ ' . mysqli_error());
  }
mysqli_query($con , "set names utf8");
mysqli_select_db("messageboard", $con);
$result = mysqli_query($con, "SELECT * FROM messageboard.visitor;");

if(!$result)
{ die('获取结果失败！'.mysqli_error($con));}

echo "<div class='box'>";
echo "<h1>留言板</h1>";

echo "<br><br>";
echo "<table border='1' bordercolor='#FFFFFF' width='1000' style='position:relative;left:30px'><tr><th>昵称</th><th>电子邮箱</th><th>留言内容</th></tr>";
while($row = mysqli_fetch_assoc($result))
{
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['txt'] . "</td>";
  echo "</tr>";
}
echo "</table>";
echo "</div>";

echo "<br>　　<button type='button' onclick='window.location.href(".'"newmessage.html"'.")'>我也要留言</button>　";
echo "<button type='button' onclick='window.location.href(".'"about.html"'.")'>返回</button><br><br>";


mysqli_close($con);
?>

</div>
</body>
</html>