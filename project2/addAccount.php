<?php
    include 'sql.php';
    $pdo=new pdo($dsn,$user,$passwd,$opt);

    if (!isset($_POST['account']))
        header("Location: addMember.php");

    $account = $_POST['account'];
    $password =
        password_hash(
            $_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];

    $sql = "INSERT INTO user (account,password,name) VALUES (?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$account,$password,$name]);
    header("Location: login.php");