<?php
$img=imagecreate(100,40);
$img=imagecreatefromjpeg("./upload/poky.jpg");

$blue=imagecolorallocate($img,0,0,255);
imagettftext($img,24,0,0,100,$blue,
    "./fonts/fireflysung.ttf",
    'Hello,World');

header('Content-Type:image/jpeg');
imagejpeg($img);
imagedestroy($img);