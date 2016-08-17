<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
this is nine
<br></br></br>
<?php
  include("conn.php"); //引入连接数据库；
  if(!empty($_POST['sub'])){
    echo "aaa"; 	
  }
?>
<?php
  
?>
<form action="z9.php" method='post'>
标题<input type="text" name="title"><br>
内容<textarea row="5" clos="50" name="con"></textarea>
<input type="submit" name="sub" value="发表">
<form>
</body>
</html>