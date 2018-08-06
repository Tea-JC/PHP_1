<?php
$num = rand(1,50);//获取1至50的随机数
$info = "";//提示信息
switch($num){
    case 1:
		$info = "恭喜你！中了一等奖！";
		break;
	case 2:
		$info = "恭喜你！中了二等奖！";
		break;
 	case 3:
		$info = "恭喜你！中了三等奖！";
		break;
	default:
		$info = "很遗憾！你没有中奖！";
}
 echo $info; //输出是否中奖
?>

PHP中的“switch...case...”语法，如下：

<?php
switch (条件)
{
case 条件值一:
  //任务一
  break; 
case 条件值二:
  //任务二
  break;
default:
  //默认任务
}
?>
首先判断条件，若条件的返回值为条件值一，则执行任务一，
若条件返回的值为条件值二，则执行任务二，
若条件的返回值既不是条件值一也不是条件值二，则执行默认任务。
break的作用是结束switch（后面会有专门举例说明），
使用 switch 语句可以避免冗长的 “if..else if..else”代码块。