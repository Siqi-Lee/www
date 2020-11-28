<?php
//$student[索引值]=具体的值
$student[4]=10;
$student[1]='christ';
$student[7]=true;
$student[3]=60;

// echo $student;  无法输出
//需要使用print_r()函数来输出数组的具体内容
print_r($student);
var_dump($student);
$student[]=10;  //若省略索引  则自增
$student[]='christ';
$student[]=true;
$student[]=60;
print_r($student);
var_dump($student);


?>