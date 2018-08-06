<?php 
    $a = TRUE; //A同意
	$b = TRUE; //B同意
	$c = FALSE; //C反对
	$d = FALSE; //D反对
	//咱顺便复习下三元运算符
	echo $a and $b?"通过":"不通过";
	echo "<br />";
	echo $a or $c?"通过":"不通过";
	echo "<br />";
	echo $a xor $c xor $d?"通过":"不通过";
	echo "<br />";
	echo !$c?"通过":"不通过";
	echo "<br />";
	echo $a && $d?"通过":"不通过";
	echo "<br />";
	echo $b || $c ||$d?"通过":"不通过";
?>

逻辑运算符主用是进行逻辑运算的，例如：逻辑与、逻辑或、逻辑异或、逻辑非等，