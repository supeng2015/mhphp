<?php
$servername = "localhost:3306";
$username = "root";
$password = "newpass";
$dbname = "cat";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  die("连接失败: " . $conn->connect_error);
} 
?>