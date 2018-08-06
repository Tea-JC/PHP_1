<?php 
     $maxLine = 4; //每排人数
	 $no = 17;//学生编号

	$line = ceil($no/$maxLine);
	$row = $no%$maxLine?$no%$maxLine:$maxLine;

	 echo "编号<b>".$no."</b>的座位在第<b>".$line."</b>排第<b>".$row."</b>个位置";
?>