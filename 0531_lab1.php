<?php
//Function方式
//    $db=@mysqli_connect("127.0.0.1","root","root",
//        "iii") or die("Server Busy");
//    if($db) echo 'OK';

//物件方式
$db=new mysqli('127.0.0.1',
    'root','root', 'iii');
$sql='insert into member(account,passwd,realname) values("brad","123456","Brad")';
$sql='select * from member';
$result=$db->query($sql);
//echo var_dump($result); 測試用
//$row=$db->fetch_object($sql);
//echo $row->id.'<br>';
//echo $row->account.'<br>';
//echo $row->passwd.'<br>';
while($row=$result->fetch_object()){
    echo "echo {$row->id}:{$row->account}:{$row->passwd}'<br>'";
}
