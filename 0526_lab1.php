<?php
include "0526_lab1(API).php";

$myBike=new Bike;
$urBike=new Bike;

$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();
$myBike->downSpeed();
$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();
$urBike->upSpeed();
echo "My Bike = {$myBike->getSpeed()}<br>";
echo "Ur Bike = {$urBike->getSpeed()}";

echo'<hr>';

$myScooter=new Scootor();
$myScooter->upSpeed();
$myScooter->upSpeed();
echo "My Scooter={$myScooter->getSpeed()}";
