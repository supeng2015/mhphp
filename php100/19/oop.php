<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>
<?php
  class Mypc{
    public $name;
    public $type;
    function __construct($name){
      $this->name = $name;  
    }
    function vod(){
      return $this->name."播放电影";
    }
    function game(){
      return "玩游戏";
    }
    function interent(){
      return "上网";
    }	
  }
  $pcl = new Mypc('家用电脑');
  //$pcl = new Mypc();
  //$pcl->name = "家用电脑";
  //$pcl->name = "公司电脑";
  echo $pcl->name;
?>

</body>
</html>