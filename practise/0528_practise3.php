<?php
$poker=array();
for($i=0;$i<10;$i++) $check[]=false;
for($i=0;$i<10;$i++){
    do{
        $r=rand(0,9);
        $isRepeat=false;
        if(!$check[$r]){
            $poker[]=$r;
            $check[$r]=true;
        }else{
            $isRepeat=true;
        }


    }while($isRepeat);



    echo "$poker[$i]<br>";
}