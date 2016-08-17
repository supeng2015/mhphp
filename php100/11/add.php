<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>
<?php
include 'conn.php';
if($_POST['submit']){
  $sql = "INSERT INTO `myca` (`id`, `name`, `date`, `des`) VALUES ('4', '$_POST[user]', '2016-08-18', '$_POST[des]')";	
  if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
  }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
<form action="add.php" method="post">
用户:<input type="text" name="user"/>
<br/>
标题:<input type="text" name="title"/>
<br/>
内容:
<textarea name="des"></textarea>
<br/>
<input type="submit" name="submit" value="提交">
</form>
</body>
</html>