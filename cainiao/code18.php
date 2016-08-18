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
	if(mysqli_connect_errno()){
	  echo "连接失败: " . mysqli_connect_error();
	}
	mysqli_query($con,"UPDATE MyGuests SET firstname='xuehui'
	WHERE firstname='Mary' AND lastname='Mwwoe'");
	mysqli_close($con);
?>
</body>
</html>