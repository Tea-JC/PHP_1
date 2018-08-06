<?php
    $my_book = "我的小写的book";
    $my_BOOK = "我的大写的BOOK";
	echo $my_book;
	echo "<br />";
	echo $my_BOOK;
	echo "<br />";
	$my_book = "这次奇迹要发生啦";
	echo $my_book;
	echo "<br />";
?>

变量名的命名规则主要有三条：

1、变量名必须以字母或下划线 “_”开头，如”$_name”,”$name” ,”$name2”等，但是”$9name”是不对的。

2、变量名只能由字母、数字、以及“_”组成，还能包含汉字。如”$_qq”,”$qq308” ,”$my_apple”，“比如"$name我等”，但是”$name*”是不对的。

3、变量名不允许包含空格。当变量名由多个单词组成，建议使用“_”进行分隔（比如 $my_apple），俗称下划线法，或者以大写字母开头比如 $myApple，俗称骆驼式命名法（也称驼峰命名法）。

特别需要注意的是，在PHP中变量名是区分大小写的，如“$my_book”与“$my_Book”代表两个不同的变量。