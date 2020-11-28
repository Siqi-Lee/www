<?php
$a=true;
echo $a;
var_dump($a); //输出变量类型
$b=1;
var_dump($b);
echo __LINE__;


//定义常量值 名称总是大写
define('MY_NAME','ChristopherLee');
echo MY_NAME;

//预定义常量    以 _ 开头为魔术常量   即随位置变化
echo __FILE__;
echo __LINE__;
echo '<br/>';   //输出一个换行标签  起到换行效果
//运算符
$c=1;
++$c;
echo $c;

echo '<br/>';
$d='世界';
echo $d.'如烟';

//比较运算符  和逻辑运算符  结果都是布尔值  true 或 false
echo '<br/>';
// if ($c==$d);
// echo '相等';
// else echo '不相等';
var_dump($c===$d);


?>