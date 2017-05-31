<?php
    include 'sql.php';
    $pdo=new pdo($dsn,$user,$passwd,$opt);

//    $sql="select * from member";
//    $rs=$pdo->query($sql);
//    while($row=$rs->fetchObject()){
//        echo "{$row->id}:{$row->account}<br>";
//    }
    //防隱碼攻擊
    $sql="insert into member (account,passwd,realname) values(?,?,?)";
//    $stmt=$pdo->prepare($sql);
//    $stmt->execute(['brad','123','Brad chao']);
    $pdo->prepare($sql)->execute([$account,$passwd,$realname]);