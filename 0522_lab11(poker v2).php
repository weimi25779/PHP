<?php
$poker=array();
for($i=0;$i<52;$i++){
    //檢查機制
    do{
        $temp=rand(0,51);
        $isRepeat=false;
        for($j=0;$j<$i;$j++){
            if($poker[$j]==$temp){
                //重複了
                $isRepeat=true;
                break;
            }
        }
    }while($isRepeat);

    //while(ture):再度回到do ; while(false):跳出迴圈

    $poker[]=$temp;
    echo $poker[$i].'<br>';
}