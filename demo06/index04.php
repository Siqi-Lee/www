<?php
//图像处理  通过GD扩展库 
header('Content-type:image/jpeg');  //告诉浏览器返回的是一张图片
//在 header  之前不能输出任何内容
$img=imagecreatetruecolor(200,200); //新建一个真彩色图像
//绘制图像
$color1=imagecolorallocate($img,46,219,50); //分配颜色  RGB数值

imagefill($img,0,0,$color1);
//生成图像 
imagejpeg($img);   //这张图片在index05.html中引用

//销毁图像
imagedestroy($img);   
?>

