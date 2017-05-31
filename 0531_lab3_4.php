<?php
    include 'sql.php';
    $pdo=new pdo($dsn,$user,$passwd,$opt);

    //$account="Peter v2";  原本
    $account="Peter v2';delete from member;";  //被攻擊,多加了 ' 和 delete from member;
                                               //其方式是讓SQL誤以為要執行兩段
    $passwd='123';
    $realname='Andy Ho';

    //防止隱碼攻擊
    $sql="insert into member (account,passwd,realname) values(?,?,?)";
    $pdo->prepare($sql)->execute([$account,$passwd,$realname]);
