<?php
$sum = 12;//小宠物当前的饥饿程度
echo "我饿啦:-(";
echo "<br />";
while($sum<100){//小宠物的饥饿程度到100，表示小宠物吃饱啦,不用继续喂了，没吃饱继续喂食
    $num = rand(1,20);//随机数，模拟喂食小宠物的小面包
	$sum = $sum + $num; //小宠物吃小面包
	echo "我还没吃饱呢！";
	echo "<br />";
}
echo "终于吃饱啦^_^";
?>

<?php
$i =  1 ; //从第1圈开始跑
do{  //跑10圈
    echo "在跑第".$i."圈。";
	$i++;
}while($i<=10);
?>

<?php
    //while例子
	$sum  = 0; 
	$num = rand(1,6); //获取1至6的随机数，模拟掷骰子
	$sum = $sum  + $num;//前进步长
	while($num==6){
		$num = rand(1,6);//获取1至6的随机数，模拟掷骰子
		$sum = $sum  + $num;//前进步长
	};
	echo "while例子执行完毕，前进：".$sum ."<br />";
	//do...while例子
	$sum  = 0; 
	do{
		$num = rand(1,6);//获取1至6的随机数，模拟掷骰子
		$sum = $sum  + $num;//前进步长
	}while($num==6);
	echo "do...while例子执行完毕，前进：".$sum ."<br />";
?>
while例子执行完毕，前进：4
do...while例子执行完毕，前进：5


<?php
//for语句写法
for($i = 1,$sum = 0;$i<=100;$i++){
    $sum = $sum + $i; //	累加求和
}
echo "for语句的运行结果：".$sum."<br />" ;

//while语句写法
$i =  1 ; // 从1开始累加
$sum = 0; //初始化和为0
while($i<=100){  //判断是否小于100
	$sum = $sum + $i; //	累加求和
	$i++; //递增1
}
echo "while语句的运行结果：".$sum."<br />" ;
?>




在PHP中foreach循环语句，常用于遍历数组，一般有两种使用方式:不取下标、取下标。

（1）只取值，不取下标

<?php
 foreach (数组 as 值){
//执行的任务
}
?>
<?php
$students = array(
'2010'=>'令狐冲',
'2011'=>'林平之',
'2012'=>'曲洋',
'2013'=>'任盈盈',
'2014'=>'向问天',
'2015'=>'任我行',
'2016'=>'冲虚',
'2017'=>'方正',
'2018'=>'岳不群',
'2019'=>'宁中则',
);//10个学生的学号和姓名，用数组存储

//使用循环结构遍历数组,获取学号和姓名  
foreach($students as  $v)
{ 
    echo $v;//输出（打印）姓名
	echo "<br />";
}
?>


（2）同时取下标和值

<?php
foreach (数组 as 下标 => 值){
 //执行的任务
}
?>

<?php
$students = array(
'2010'=>'令狐冲',
'2011'=>'林平之',
'2012'=>'曲洋',
'2013'=>'任盈盈',
'2014'=>'向问天',
'2015'=>'任我行',
'2016'=>'冲虚',
'2017'=>'方正',
'2018'=>'岳不群',
'2019'=>'宁中则',
);//10个学生的学号和姓名，用数组存储

//使用循环结构遍历数组,获取学号和姓名  
foreach($students as $key =>$v)
{ 
    echo $key.":".$v;//输出（打印）学号：姓名
	echo "<br />";
}
?>


<?php
    $totalMoney = 0;//总工资
	$basicMoney =  300;//基本工资
	$sex = "男";
	$noHouse = TRUE; //是否有房
	$houseMoney =  150;//住房补贴
	$isPregnancy = TRUE; //是否怀孕
	$pregnancyMoney =  100;//怀孕补贴
	if($sex == "男")
	{
		$totalMoney = $basicMoney  + 0;// 男的没奖金
		if($noHouse)
		{
			$totalMoney = $totalMoney  + $houseMoney;
		} 
	}
	else if($sex == "女")
	{
		$totalMoney = $basicMoney  + 300;// 女的有奖金300元
		if($isPregnancy)
		{
			$totalMoney = $totalMoney  + $pregnancyMoney;
		} 
	}
	echo $totalMoney;
?>