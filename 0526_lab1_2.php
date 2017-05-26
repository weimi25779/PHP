<?php
include "0526_lab1_1.php";

$myBike=new Bike;  //只要建立物件,就會跑一次建構子(式)
echo '<br>';
$urBike=new Bike;
echo '<br>';

$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();
$myBike->downSpeed();
$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();
$urBike->upSpeed();

echo "My Bike= {$myBike->getSpeed()}<br>";
echo "Ur Bike = {$urBike->getSpeed()}";

echo'<hr>';

$myScooter=new Scootor();
echo'<br>';
$myScooter->upSpeed();
$myScooter->upSpeed();
echo "My Scooter={$myScooter->getSpeed()}";
