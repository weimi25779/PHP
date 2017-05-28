<?php
   $poker=array();
   for($i=0;$i<52;$i++){
       $temp=rand(0,51);
       //檢查機制
       $isRepeat=false; //重作,先設定成false
       for($j=0;$j<$i;$j++){
           if($poker[$j]==$temp){
               //重複了
               $isRepeat=true;
               break;
           }
       }
       if($isRepeat){
           $i--; //有上一次重作的意思
           continue;  //回到第3行for迴圈,不會往下做
       }else{   //不重複時,將temp的值,給$poker[i]
           $poker[]=$temp;
       }
       echo $poker[$i].'<br>';
       //echo "poker[{$i}]:{$poker[$i]}<br>"; Test用
   }