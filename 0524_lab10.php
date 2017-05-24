<?php
$upload = $_FILES['upload'];
foreach ($upload['error'] as $index => $error){  //將陣列($upload['error'])的key,存放在index
    //取上傳成功的index
    if ($error == 0){
        copy($upload['tmp_name'][$index],
            "./upload/{$upload['name'][$index]}");
    }
}

//foreach ( 陣列 as $key => $value ),參考http://www.wibibi.com/info.php?tid=204
//以Java來看,即array[0]=香蕉,array[1]=蘋果,array[2]=芭樂