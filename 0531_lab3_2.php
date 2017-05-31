<?php
    include 'sql.php';
    $pdo=new pdo($dsn,$user,$passwd,$opt);


    //防止隱碼攻擊
    $sql="insert into member (account,passwd,realname) values(?,?,?)";
    $stmt=$pdo->prepare($sql);
    //$stmt->execute(['brad','123','Brad chao']);
    $stmt->execute([$account,$passwd,$realname]);
