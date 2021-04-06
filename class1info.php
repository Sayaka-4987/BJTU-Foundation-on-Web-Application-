<!DOCTYPE html>
<html> 
<head>
<style>
@import url("css/CSS固定底部导航栏.css");
.box{
	text-align:center;
	border: 0px;
	box-sizing:border-box;
	width:300px;
	position:relative;
	left:120px;
	background-color:rgba(255, 255, 255, 0.47);
	}
</style>
</head>

<body background="img/classroom.jpg">
<?php
$con = mysqli_connect("localhost","root","12345678");
if (!$con)
  {
  die('连接MySQL数据库失败！ ' . mysqli_error());
  }
mysqli_query($con , "set names utf8");
$result = mysqli_query($con, "SELECT * FROM students.class1;");

if(!$result)
{ die('获取结果失败！'.mysqli_error($con));}

echo "<div class='box'>";
echo "<h1>一班同学名单</h1>";
echo "操作：";

echo "<button type='button' onclick='window.location.href(".'"SQLinsert.html"'.")'>增加</button>";
echo "　";
echo "<button type='button' onclick='window.location.href(".'"SQLdelete.html"'.")'>删除</button>";
echo "　";
echo "<button type='button' onclick='window.location.href(".'"SQLupdate.html"'.")'>修改</button>";
echo "　";
echo "<button type='button' onclick='window.location.href(".'"about.html"'.")'>返回</button>";

echo "<br><br>";
echo "<table border='1' bordercolor='#FFFFFF' width='300'><tr><th>ID</th><th>Name</th><th>tel</th></tr>";
while($row = mysqli_fetch_assoc($result))
{
  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['tel'] . "</td>";
  echo "</tr>";
}
echo "</table>";
echo "</div>";

mysqli_close($con);
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
