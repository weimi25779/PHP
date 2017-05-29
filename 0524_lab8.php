<?php
$upload=$_FILES['upload'];
   //echo var_dump($upload);
if ($upload['error']==0){ //表示上傳成功,error使用第2行就可以看到array中的值
    echo $upload['name'];
    if(copy($upload['tmp_name'],
        "./upload/{$upload['name']}")){        //des:目標 ,$upload['name']:上傳的檔案名稱
        echo 'upload OK';
    }else{
        echo 'Copy Fail';
    }
}else{
    echo 'uplaod Fail';
}