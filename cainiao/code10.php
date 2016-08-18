<!DOCTYPE HTML> 
<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body> 
<?php
$servername = "localhost:3306";
$username = "root";
$password = "newpass";

// 创建连接
$conn = new mysqli($servername, $username, $password);
// 检测连接
if($conn->connect_error) {
  die("连接失败: " . $conn->connect_error);
} 
// 创建数据库
$sql = "CREATE DATABASE myxuehui";
if($conn->query($sql) === TRUE){
  echo "数据库创建成功";
}else{
  echo "Error creating database: " . $conn->error;
}
$conn->close();
?>
</body>
</html>