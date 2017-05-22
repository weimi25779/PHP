<?php
$poker=array();
for($i=0;$i<52;$i++) $check[]=false;
for($i=0;$i<52;$i++){
    //檢查機制
    do{
        $temp=rand(0,51);
        $isRepeat=false;
            if(!$check[$temp]){
                //如果check[ ],是空的(即裡面沒值),就執行下列
                $poker[]=$temp;
                $check[$temp]=true;
            }else{
                $isRepeat=true; //都檢查完且沒重複,就會執行這段,然後跳出while迴圈
            }

    }while($isRepeat);

    echo $poker[$i].'<br>';
}