<?php   //自定义函数
function test(){
    echo '世界<br>';
}
//调用函数
test();     
//函数内部的变量之间互不影响  命名可相同
function add($a,$b){      //$a $b 形式参数
     echo $a+$b.'<br>';
}
add(1,2);  //1 ，2 实际参数  个数与形式参数相同 ，可以多写 ，会忽略多的参数

function shit($a,$b){   //return 结束函数运行  返回值给调用的地方  默认返回值为null
    return $a+$b*2;

}
$i=shit(1,2);
echo $i.'<br>';

//按引用传递参数
function H(&$a){
    echo ++$a;
    
}
$i=10;
echo H($i).'<br>';

//递归函数  自己调用自己    有结束条件
function G($n){
    echo $n.'&nbsp;';
    if($n>0){
        G($n-1);  //在函数内部调用自己   即递归函数
    }
}
G(23);

//内置函数   php提供的现成的函数

?>