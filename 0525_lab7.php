<?php
if(!isset($_GET['rate'])) exit(0);
$rate=$_GET['rate'];

$img=imagecreate(400,40);

$yellow=imagecolorallocate($img,255,255,0);
$red=imagecolorallocate($img,255,0,0);
imagefilledrectangle($img,0,0,200,40,$yellow);
imagefilledrectangle (
    $img, 0 , 0 , (int)($rate*400/100) , 40 , $red );

header('Content-Type:image/jpeg');
imagejpeg($img);

imagedestroy($img); //清除畫布(記憶體)