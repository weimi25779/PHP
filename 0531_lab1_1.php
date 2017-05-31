<?php
    //Function方式
    // $db=@mysqli_connect("127.0.0.1","root","root",
    //        "iii") or die("Server Busy");
    //   if($db) echo 'OK';

    //物件方式
    $db=@new mysqli('127.0.0.1',
        'root','root', 'iii') or die("Server Busy");
    $sql='insert into member(account,passwd,realname) values("brad","123456","Brad")';
    $result=$db->query($sql); //query(): 用來查詢數據記錄並返回查詢結果
    echo var_dump($result); //測試用

