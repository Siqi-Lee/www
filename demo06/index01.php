<?php
$student=array(10,'christ',true,60.3,);
print_r($student);

$stu1=array(
    0=>10,
    1=>'christ',
    2=>50.3,
    4=>true
);

var_dump($stu1);   //索引值2为字符串

$stu2['num']=10;
$stu2['name']='christ';
$stu2['sex']=true;
$stu2['grade']=60.3;

var_dump($stu2);
echo $stu2['name'];  //输出数组的值  通过  索引值 
//二维数组
$stus=array(         //数组可以存放任何数据类型   数组也是一种数据类型
                     //将数组放入数组中
    0=>$stu1,
    1=>$stu2
);
var_dump($stus);


//$a=count($stus);     //count 返回数组内元素个数
//echo $a.'<br>';
// for($i=0;$i<count($stus);$i++){    //for循环遍历二维数组
//     for($b=0;$b<count($stus[$i]);$b++){
          
//     }
// }    有点问题

?>