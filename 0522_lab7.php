<?php
  $a[0]=12;
  $a[7]='Brad';
  echo gettype($a).'<br>';
  var_dump($a);
  echo count($a);
  echo '<hr>';
  $b[]=123;
  $b[]=12.3;
  $b[]=true;
  var_dump($b);
  echo count($b);
  echo '<hr>';
  $brad['age']=51;
  $brad['weight']=81;
  $brad['name']='Brad';
  $brad['gender']=true;
  var_dump($brad);
  echo count($brad);
  echo '<hr>';
  $c=array(1,2,3,'gender'=>true);
  var_dump($c);
  echo count($c);
?>