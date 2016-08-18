<!DOCTYPE HTML> 
<html>
<head>
<meta charset="utf-8">
<title>秦时明月</title>
</head>
<body>
<?php
$con=mysqli_connect("localhost:3306","root","newpass","myxuehui");
// 检测连接
if (mysqli_connect_errno())
{
	echo "连接失败: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM MyGuests
WHERE firstname='Mary'");

while($row = mysqli_fetch_array($result))
{
	echo $row['firstname'] . " " . $row['lastname'];
	echo "<br>";
}
?>
</body>
</html>