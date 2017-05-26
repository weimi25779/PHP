<?php
$imgSrc = imagecreatefromjpeg ("./imgw400.jpg" ); //來源
$imgDst = imagecreate(200, 200); //目的
$imgSW = imagesx($imgSrc); //獲取圖像的寬度(x)
$imgSH = imagesy($imgSrc); //獲取圖像的高度(y)
//縮圖的寬及高不大於 200
if ($imgSW>$imgSH){ //例:400x50的圖檔
    $imgDW = 200; //畫框W:200,圖W:400,畫框W最大200,故DW設為200
    $imgDH = $imgSH * 200 / $imgSW;
}else{   //例:50x400的圖檔
    $imgDH = 200;
    $imgDW = $imgSW * 200 / $imgSH;
}
imagecopyresized (
    $imgDst , $imgSrc,
    50 , 0,
    60, 0,
    $imgDW , $imgDH ,
    $imgSW , $imgSH );

header('Content-Type: image/jpeg');
imagejpeg($imgDst);

imagedestroy ( $imgSrc );
imagedestroy ( $imgDst );

//建立縮圖
//int imagecopyresized (
// resource dst_image, resource src_image,
// int dst_x, int dst_y,
// int src_x, int src_y,
// int dst_w, int dst_h,
// int src_w, int src_h )

//dst_image -- 輸出目標檔案
//src_image -- 來源檔案
//dst_x -- 目標檔案開始點的 x 座標 ,即畫框座標
//dst_y -- 目標檔案開始點的 y 座標
//src_x -- 來源檔案開始點的 x 座標,即圖檔座標
//src_y -- 來源檔案開始點的 y 座標
//dst_w -- 目標檔案的長度
//dst_h -- 目標檔案的高度
//src_w -- 來源檔案的長度
//src_h -- 來源檔案的高度