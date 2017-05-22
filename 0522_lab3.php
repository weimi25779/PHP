<?php
//for($i=0;$i<10;$i++){
//    echo $i.'<br>';
//}

//$i=0;
//for(;$i<20;$i++){
//    echo $i.'<br>';
//}

//$i=0;
//for(;$i<15;){
//    echo $i++ .'<br>';
//}

//$i=0;
//for(test1();$i<15;test2()){
//    echo $i++ .'<br>';
//}
//function test1(){
//    echo 'Brad<br>';
//}
//function test2(){
//    echo '-----<br>';
//}

$i=0;
for(test1();;test2()){
    echo $i++ .'<br>';
    if($i>15) break;
}
function test1(){
    echo 'Brad<br>';
}
function test2(){
    echo '-----<br>';
}


?>