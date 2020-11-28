<?php
$pattern='/te\dst/';  //这就是一个正则表达式  用//定界符 表示正则的开始和结束
$str='hfisuehgte6stisehlgishtest';
var_dump(preg_match_all($pattern,$str,$arr));   //返回符合特征的个数  存放在$arr中
var_dump($arr);   //     /为正斜杠   \为反斜杠
//元字符 \d  代表   0-9 任意一个数字

$pattern='/te\Dst/';  //这就是一个正则表达式  用//定界符 表示正则的开始和结束
$str='hfisuehgte&stisehlgishtest';
var_dump(preg_match_all($pattern,$str,$arr));   //返回符合特征的个数  存放在$arr中
var_dump($arr); 
//元字符 \D 代表 除0-9 的任意一个字符 

$pattern='/te\sst/';  //这就是一个正则表达式  用//定界符 表示正则的开始和结束
$str='hfisuehgte stisehlgishtest';
var_dump(preg_match_all($pattern,$str,$arr));   //返回符合特征的个数  存放在$arr中
var_dump($arr); 
//元字符 \s    代表一个空白字符

$pattern='/te\ss\nt/';  //这就是一个正则表达式  用//定界符 表示正则的开始和结束
$str="hfisuehgte s\ntisehlgishtest";   //  这里  使用了\n 所以要用双引号 不然不能识别
var_dump(preg_match_all($pattern,$str,$arr));   //返回符合特征的个数  存放在$arr中
var_dump($arr); 
//元字符 \n 代表 换行

$pattern='/te\wst/';  //这就是一个正则表达式  用//定界符 表示正则的开始和结束
$str='hfisuehgte_stisehlgishtest';
var_dump(preg_match_all($pattern,$str,$arr));   //返回符合特征的个数  存放在$arr中
var_dump($arr); 
//元字符 \w    代表任意一个字母 数字 下划线
//  元字符大小写 为  相反的逻辑

$pattern='/te.st/';  //这就是一个正则表达式  用//定界符 表示正则的开始和结束
$str='hfisuehgte@stisehlgishtest';
var_dump(preg_match_all($pattern,$str,$arr));   //返回符合特征的个数  存放在$arr中
var_dump($arr); 
//元字符 .   代表除换行以外的任意一个字符

$pattern='/te*st/';  //这就是一个正则表达式  用//定界符 表示正则的开始和结束
$str='hfisuehgteeeeeeeestisehlgishtest';
var_dump(preg_match_all($pattern,$str,$arr));   //返回符合特征的个数  存放在$arr中
var_dump($arr); 
//元字符 *  匹配 *前单个字符任意次

$pattern='/te+s+t/';  //这就是一个正则表达式  用//定界符 表示正则的开始和结束
$str='hfisuehgteeeeeeeesssssstisehlgishtest';
var_dump(preg_match_all($pattern,$str,$arr));   //返回符合特征的个数  存放在$arr中
var_dump($arr); 
//元字符 +  匹配 +前单个字符非零任意次

$pattern='/t(e+s+t)\\1/';  //这就是一个正则表达式  用//定界符 表示正则的开始和结束
$str='hfisuehgteeeeeeeessssssteeeeeeeesssssstisehlgishtest';
var_dump(preg_match_all($pattern,$str,$arr));   //返回符合特征的个数  存放在$arr中
var_dump($arr); 
//元字符 +  匹配 +前单个字符非零任意次

//模式修正符   用于 //定界符 之后使用
$pattern='/te*st/i';  //这就是一个正则表达式  用//定界符 表示正则的开始和结束
$str='hfisuehgteeeEEEEEEEeeestisehlgishtest';
var_dump(preg_match_all($pattern,$str,$arr));   //返回符合特征的个数  存放在$arr中
var_dump($arr); 
//模式修正符 i  匹配模式时 不区分大小写

$pattern='/^test/m';  //这就是一个正则表达式  用//定界符 表示正则的开始和结束
$str="test\ntest\ntest\ntest\n";
var_dump(preg_match_all($pattern,$str,$arr));   //返回符合特征的个数  存放在$arr中
var_dump($arr); 
//模式修正符 m  多行匹配

//设置时区
//默认时区是UTC
date_default_timezone_set('Asia/Shanghai');  
//获取当前Unix的时间戳 从Unix时间戳（格林威治1970年）至今的秒数
$time0=time();
$time1=mktime(0,0,0,1,1,2021);

$now=-($time0-$time1)/3600/24;
echo '距离2021年还有'.$now.'天';

//格式化时间
var_dump(date('Y-m-d G:i:s').microtime(true));


?>                