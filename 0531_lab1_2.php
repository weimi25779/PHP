<?php
    $db=@new mysqli('127.0.0.1',
        'root','root', 'iii') or die("Server Busy");
    $sql='insert into member(account,passwd,realname) values("brad","123456","Brad")';

    $sql='select * from member';
    $result=$db->query($sql);

//    $row=$result->fetch_object($sql);
//    echo $row->id.'<br>';
//    echo $row->account.'<br>';
//    echo $row->passwd.'<br>';

    while($row=$result->fetch_object()){  //fetch_object:抓物件
        echo "{$row->id}:{$row->account}:{$row->passwd}<br>";
    }
