<?php
$img=imagecreate(100,40);
$img=imagecreatefromjpeg("./upload/poky.jpg");
// 從JPEG或URL新建一圖像

$blue=imagecolorallocate($img,0,0,255);

imagettftext($img,24,315,10,100,$blue,
    "./fonts/fireflysung.ttf",
    "Hello,World");
//將字體(font)寫入圖檔

header('Content-Type:image/jpeg');
imagejpeg($img);
imagedestroy($img);//銷毀圖像