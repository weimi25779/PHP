<?php
    include 'sqlWeimi.php';
    $pdo=new pdo($dsn,$user,$passwd,$opt);

    $sql = "SELECT * FROM member";
    $stmt = $pdo->prepare($sql);    // statement(陳述) SQL用語
    $stmt->execute([$account]);