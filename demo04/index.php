<?php
//while
$i=1;
while($i<10){
    echo $i++;
}
echo '<br /';
// do_while
$i=0;
do{
    echo $i++.'<br />';
}while($i<10);
echo '....';
echo '<br>';

//for
for ($i=0; $i<10; $i++)
{
    if($i==5){
        break;
    }
    echo "执行到第{$i}遍！<br />";  //单引号没法引用变量   必须用双引号
}
?>