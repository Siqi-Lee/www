<?php
//验证码
ob_clean();
header('Content-type:image/jpeg');  //告诉浏览器返回的是一张图片
//在 header  之前不能输出任何内容
$width=120;  //宽
$height=40;  //高
$img=imagecreatetruecolor($width,$height); //新建一个真彩色图像
//绘制图像
$color1=imagecolorallocate($img,rand(200,600),rand(200,600),rand(200,600)); //分配颜色  RGB数值
$color2=imagecolorallocate($img,rand(200,600),rand(200,600),rand(200,600)); //分配颜色  RGB数值
$color3=imagecolorallocate($img,rand(200,600),rand(200,600),rand(200,600)); //分配颜色  RGB数值
$color4=imagecolorallocate($img,rand(200,600),rand(200,600),rand(200,600)); //分配颜色  RGB数值
$color5=imagecolorallocate($img,rand(200,600),rand(200,600),rand(200,600)); //分配颜色  RGB数值

imagefill($img,0,0,$color1);  //填充颜色

imagerectangle($img,0,0, $width-1, $height-1, $color2);   //画一个矩形
for($i=0;$i<100;$i++){  //点
imagesetpixel($img,rand(0,$width-1),rand(0,$height),$color3);
}
for($i=0;$i<3;$i++){   //线
imageline($img,rand(0,$width/2),rand(0,$height),rand($width/2,$width),rand(0,$height), $color4);  
}
//imagestring($img,5,0,0,'able',$color5);    
imagettftext($img,14,0,0,40, $color5,'demo06\Fonts\jokerman.ttf','shit');  //字母

//生成图像 
imagejpeg($img);   //这张图片在index05.html中引用

//销毁图像
imagedestroy($img);   
?>
