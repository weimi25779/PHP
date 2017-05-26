<?php
// 1
$img=imagecreate(400,40); //建立畫布

// 2
$yellow=imagecolorallocate($img,255,255,0);
$red=imagecolorallocate($img,255,0,0);
//設定顏色
imagefilledrectangle($img,0,0,400,40,$yellow);
imagefilledrectangle ($img, 0 , 0 , 400 , 40 , $red );
//畫一矩形並填充

//3
header('Content-Type:image/jpeg');
//設定檔頭為image/jpeg類型,即告訴瀏覽器為image/jpeg類型
imagejpeg($img); //輸出圖像

imagedestroy($img); //清除畫布(記憶體)