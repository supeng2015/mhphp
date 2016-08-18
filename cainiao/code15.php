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
if($conn->connect_error) {
  die("连接失败: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"];
    }
} else {
    echo "0 个结果";
}
$conn->close();
?>
</body>
</html>