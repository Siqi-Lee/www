<?php
$pass=60;
$a=6.1;
if($a>=$pass){  //语句块  花括号里
    echo '恭喜';
    echo 'hehe';
}else{
    echo 'sorry';
}
echo '代码执行结束';
echo '<br />';
//switch
$b=6;
switch ($b){
    case 1:
        echo 'Monday<br />';
        break;
    case 2:
        echo 'Tuesday<br />';
        break;
    case 3:
        echo 'Wesday<br />';
        break;
    case 4:
        echo 'Thuesday<br />';
        break;
    case 5:
        echo 'Friday<br />';
        break;
    case 6:
        echo 'Saturday<br />';
        break;
    case 7:
        echo 'sunday<br />';
        break;
    default:
        echo 'Dont know<br />';
        break;
}     //一旦匹配到case  则  立即停止比较  输出之后的所有echo
      //所以需要每个case结束用break  跳出


?>