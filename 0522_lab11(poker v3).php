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
                $isRepeat=true; //若check[]裡為true表示有值,則有重複,故將isRepeat設為true
            }

    }while($isRepeat);

    echo $poker[$i].'<br>';
}