<?php 
$p="";
//定义圆周率的两种取值
define("PI1",3.14);
define("PI2",3.142);
//定义值的精度
$height = "中";
//根据精度返回常量名，将常量变成了一个可变的常量
if($height == "中"){
    $p = "PI1";
}else if($height == "低"){
	$p = "PI2";
}
$r=1;
$area= constant($p)*$r*$r;
echo $area;
?>

获取常量值的有两种方法取值。第一种是使用常量名直接获取值；例如计算圆周率的面积，如下（“*”是运算符，相当于乘号）：

<?php
define("PI",3.14);
$r=1;
$area = PI*$r*$r; //计算圆的面积
?>
第二种是使用constant()函数。它和直接使用常量名输出的效果是一样的，但函数可以动态的输出不同的常量，在使用上要灵活、方便，其语法格式如下：

mixed constant(string constant_name)
第一个参数constant_name为要获取常量的名称，也可为存储常量名的变量。如果成功则返回常量的值，失败则提示错误信息常量没有被定义。
（注：mixed表示函数返回值类型为多种不同的类型，string表示参数类型为字符串类型）




<?php 
define("PI1",3.14);
$p = "PI1";
$is1 = defined($p);
$is2 = defined("PI2");
var_dump($is1);
var_dump($is2);
?>

如果常量被重复定义以后，PHP解析器会发出“Constant XXX already defined”的警告，提醒我们该常量已经被定义过。
那么，在团队开发，或代码量很大的情况下，我们如何去判定一个常量是否被定义呢？

defined()函数可以帮助我们判断一个常量是否已经定义，其语法格式为：

bool defined(string constants_name)
它只有参数constant_name，指的是要获取常量的名称，若存在则返回布尔类型true，否则返回布尔类型false; （注：bool表示函数返回值类型为布尔类型）