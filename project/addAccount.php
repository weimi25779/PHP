<?php
    include 'sql.php';
    $pdo=new pdo($dsn,$user,$passwd,$opt);

    if (!isset($_POST['account']))
        header("Location: addMember.php");

    $account = $_POST['account'];
    $passwd =
        password_hash(
            $_POST['passwd'], PASSWORD_DEFAULT);
    $username = $_POST['username'];

    $sql = "INSERT INTO member (account,passwd,username) VALUES (?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$account,$passwd,$username]);
    header("Location: login.php");