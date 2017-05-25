<?php
$imgSrc = imagecreatefromjpeg (
    "./imgw400.jpg" );
$imgDst = imagecreate(200, 200);
$imgSW = imagesx($imgSrc);
$imgSH = imagesy($imgSrc);
if ($imgSW>$imgSH){
    $imgDW = 200;
    $imgDH = $imgSH * 200 / $imgSW;
}else{
    $imgDH = 200;
    $imgDW = $imgSW * 200 / $imgSH;
}
imagecopyresized (
    $imgDst , $imgSrc,
    0 , 0,
    0, 0,
    $imgDW , $imgDH ,
    $imgSW , $imgSH );

header('Content-Type: image/jpeg');
imagejpeg($imgDst);

imagedestroy ( $imgSrc );
imagedestroy ( $imgDst );