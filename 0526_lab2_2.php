<?php
include "0526_lab2_1.php";

if(TWID::checkId('A123456789')==1){  //如果身分字號正確,就將此ID(身分證字號)建立成物件
    $myId = new TWID('A123456789');
    echo $myId->getGender()?'Male':'Femal';

    $Id2 = new TWID('A123456789');   //計算建立的物件個數
    $Id3 = new TWID('A123456789');
    $Id4 = new TWID('A123456789');
    echo TWID::$counter;
}else{
    echo 'XX';
}


