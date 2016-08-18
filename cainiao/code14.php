<!DOCTYPE HTML> 
<html>
<head>
<meta charset="utf-8">
<title>mysql</title>
</head>
<body>
<?php
$servername = "localhost:3306";
$username = "root";
$password = "newpass";
$dbname = "myxuehui";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 预处理及绑定
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES(?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// 设置参数并执行
$firstname = "wodeaoren";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "wodeaorenyijing";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "wodeaorenyijing";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "新记录插入成功";

$stmt->close();
$conn->close();
?>
</body>
</html>