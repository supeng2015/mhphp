<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>
<?
class Mypc {
  public $key;
  public $name;
  function vod(){
    echo "php100视频教程";	
  }	
}
$pcl = new Mypc();
$pcl->key = "php";
echo $pcl->key;
$pcl->vod();
?>
</body>
</html>