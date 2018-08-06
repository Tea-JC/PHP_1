<?php 
$str_string1 = '我是字符串';
$str_string2 = "我也是字符串哦";
echo $str_string1;
echo "<br />";
echo $str_string2;
?>
字符串是由一系列字符组成，在PHP中，字符和字节一样，也就是说，一共有256种不同字符的可能性。

字符串型可以用三种方法定义：单引号形式、双引号形式和Heredoc结构形式


当你的字符串中包含引号的时候:
/*
<?php 
$str_string1 = '甲问："你在哪里学的PHP？"';
$str_string2 = "乙毫不犹豫地回答：'当然是慕课网咯！'";
$str_string3 = '甲问:\'能告诉我网址吗？\'';
$str_string4 = "乙答道:\"www.imooc.com\"";
echo $str_string1;
echo "<br />";
echo $str_string2;
echo "<br />";
echo $str_string3;
echo "<br />";
echo $str_string4;
echo "<br />";
?>
*/


当引号遇到美元符号:
<?php 
$love = "I love you!"; 
$string1 = "慕课网,$love";
$string2 = '慕课网,$love';
echo $string1;
echo "<br />";
echo $string2;
?>
当双引号中包含变量时，变量会与双引号中的内容连接在一起；

当单引号中包含变量时，变量会被当做字符串输出。


当字符串很长怎么办:
<?php 
$string1 = <<<GOD
我有一只小毛驴，我从来也不骑。
有一天我心血来潮，骑着去赶集。
我手里拿着小皮鞭，我心里正得意。
不知怎么哗啦啦啦啦，我摔了一身泥.
GOD;

echo $string1;
?>

我们可以使用Heredoc结构形式的方法来解决该问题，
首先使用定界符表示字符串（<<<），接着在“<<<“之后提供一个标识符GOD，然后是字符串，最后以提供的这个标识符结束字符串。
