<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>
<?php
$to = "281317914@qq.com";         // 邮件接收者
$subject = "参数邮件";                // 邮件标题
$message = "Hello! 这是邮件的内容。";  // 邮件正文
$from = "someonelse@example.com";   // 邮件发送者
$headers = "From:" . $from;         // 头部信息设置
mail($to,$subject,$message,$headers);
echo "邮件已发送";
?>
<?php
// if (isset($_REQUEST['email'])) { // 如果接收到邮箱参数则发送邮件
// 	// 发送邮件
// 	$email = $_REQUEST['email'] ;
// 	$subject = $_REQUEST['subject'] ;
// 	$message = $_REQUEST['message'] ;
// 	mail("someone@example.com", $subject,
// 	$message, "From:" . $email);
// 	echo "邮件发送成功";
// } else { // 如果没有邮箱参数则显示表单
// 	echo "<form method='post' action=''>
// 	Email: <input name='email' type='text'><br>
// 	Subject: <input name='subject' type='text'><br>
// 	Message:<br>
// 	<textarea name='message' rows='15' cols='40'>
// 	</textarea><br>
// 	<input type='submit'>
// 	</form>";
// }
?>


</body>
</html>
