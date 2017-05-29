<?php
// 1.建立畫布
$img=imagecreate(400,40);

// 2.設定顏色
$yellow=imagecolorallocate($img,255,255,0);
$red=imagecolorallocate($img,255,0,0);

//2.畫一矩形並填充顏色
imagefilledrectangle($img,0,0,400,40,$yellow);
imagefilledrectangle ($img, 0 , 0 , 400 , 40 , $red );

//3.設定檔頭為image/jpeg類型,即告訴瀏覽器為image/jpeg類型
header('Content-Type:image/jpeg');

//4.輸出圖像
imagejpeg($img);

//5.清除畫布(記憶體)
imagedestroy($img);