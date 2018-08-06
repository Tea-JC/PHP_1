<?php 
//首先采用“fopen”函数打开文件，得到返回值的就是资源类型。
$file_handle = fopen("/data/webroot/resource/php/f.txt","r");
if ($file_handle){
    //接着采用while循环（后面语言结构语句中的循环结构会详细介绍）一行行地读取文件，然后输出每行的文字
    while (!feof($file_handle)) { //判断是否到最后一行
        $line = fgets($file_handle); //读取一行文本
        echo $line; //输出一行文本
        echo "<br />"; //换行
    }
}
fclose($file_handle);//关闭文件
?>

资源（resource）：资源是由专门的函数来建立和使用的，例如打开文件、数据连接、图形画布。
我们可以对资源进行操作（创建、使用和释放）。任何资源，在不需要的时候应该被及时释放。
如果我们忘记了释放资源，系统自动启用垃圾回收机制，在页面执行完毕后回收资源，以避免内存被消耗殆尽。

举例如下：

<?php
$file=fopen("f.txt","r");   //打开文件
$con=mysql_connect("localhost","root","root");  //连接数据库
$img=imagecreate(100,100);//图形画布
?>