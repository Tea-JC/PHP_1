<?php  
    $a = 1;
	$b = "1";
	var_dump($a==$b);
	echo "<br />";
	var_dump($a===$b); 全等
	echo "<br />";
	var_dump($a!=$b);
	echo "<br />";
	var_dump($a<>$b);  不等
	echo "<br />";
	var_dump($a!==$b); 非全等
	echo "<br />";
	var_dump($a<$b);
	echo "<br />";

	$c = 5;
	var_dump($a<$c);
	echo "<br />";
	var_dump($a>$c);
	echo "<br />";
	var_dump($a<=$c);
	echo "<br />";
	var_dump($a>=$c);
	echo "<br />";
	var_dump($a>=$b);
	echo "<br />";
?>

比较运算符主要是用于进行比较运算的，例如：等于、全等、不等、大于、小于。在PHP中常用的比较运算符如下表：
