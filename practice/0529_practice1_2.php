<?php
$account=$_GET['account'];
$password=$_GET['password'];
$birthday=$_GET['birthday'];
$area=$_GET['area'];
$gender=$_GET['gender'];
$like=$_GET['like[]'];

echo $account.'<br>';
echo $password.'<br>';
echo $birthday.'<br>';
echo $area.'<br>';
echo $gender.'<br>';
foreach($like as $value)
    echo $value.'<br>';