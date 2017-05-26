<?php
   include '0526_lab3.php';

   $memnerObj=new Member('A123456789');
   $cartObj=new Cart($memnerObj);

   $cartObj->addItem('P001',3);
   $cartObj->addItem('P002',4);
   $list=$cartobj->getList();
   foreach ($list as $pid=>$qty){
       echo"{$pid}:{$qty}";
   }