<?php 
 error_reporting(0); //禁止显示PHP警告提示
 $var;
 var_dump($var);
 $var1 = null;
 var_dump($var1);
 $var2 = NULL;
 var_dump( $var2);
 $var3 = "节日快乐！";
 unset($var3);//释放$var3
 var_dump($var3);
?>

NULL（NULL）：NULL是空类型，对大小写不敏感，NULL类型只有一个取值，表示一个变量没有值，当被赋值为NULL，或者尚未被赋值，或者被unset()，
这三种情况下变量被认为为NULL。