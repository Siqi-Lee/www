<?php
header('Content-type:image/jpeg');
$img=imagecreatefromjpeg('img/夏天幸福 极简主义5k壁纸5120x2880_彼岸图网.jpg');
$color1=imagecolorallocate($img,rand(200,600),rand(200,600),rand(200,600)); //分配颜色  RGB数值
imagettftext($img,14,0,100,100, $color1,'Fonts/simhei.ttf','世界如烟');  //字母




imagejpeg($img);
imagedestroy($img);

?>