<?php
    include 'sqlWeimi.php';
    $pdo=new pdo($dsn,$user,$passwd,$opt);

    if (!isset($_POST['account']))
        header("Location: addMemberV2.php");

    $account = $_REQUEST['account'];
    $passwd =
        password_hash(
            $_REQUEST['passwd'], PASSWORD_DEFAULT);
    $rname = $_REQUEST['rname'];

    $sql = "INSERT INTO member (account,passwd,rname) VALUES (?,?,?)";
    $stmt = $pdo->prepare($sql);    // statement(陳述) SQL用語
    $stmt->execute([$account,$passwd,$rname]);
    header("Location: loginv2.php");




