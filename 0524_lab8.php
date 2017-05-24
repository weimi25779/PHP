<?php
$upload=$_FILES['upload'];
   //echo var_dump($upload);
if ($upload['error']==0){
    echo $upload['name'];
    if(copy($upload['tmp_name'],
        "./upload/{$upload['name']}")){
        echo 'upload OK';
    }else{
        echo 'Copy Fail';
    }
}else{
    echo 'uplaod Fail';
}