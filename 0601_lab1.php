<?php
    $passwd1='123456';
    echo "{$passwd1}<br>";

    $hash1=password_hash($passwd1,PASSWORD_DEFAULT);
    //hash: 雜湊
    //PASSWORD_DEFAULT - 使用 bcrypt 算法
    echo "{$hash1}<br>";

    $hash2=password_hash($passwd1,PASSWORD_DEFAULT);
    echo "{$hash2}<br>";

    if(password_verify($passwd1,$hash1)){
        echo 'OK';
    }else{
        echo 'XX';
    }