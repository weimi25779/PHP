<?php   //session_start() 一般放在網頁的最上方還沒有輸出任何東西之前,不然容易發生錯誤
   include '0526_lab2_1.php';
   session_start(); //告訴系統準備開始使用session
   //另外, 如果 session 中有定義在 include 中的類別物件的情況下, 更應該是放在 include 之後
   //Session：儲存於伺服器端，不用擔心用戶禁用session的問題，但計錄檔案的負荷由伺服器承擔。
   //Cookie：儲存於用戶端，可能有用戶端禁用cookie，但伺服器不需承擔計錄檔案的負荷。

   $memberObj=new Member('A123456789');  //物件
   $cartObj=new Cart($memberObj);  //陣列

   $var1 = 10;  //這樣寫,值才會記錄到伺服器
   $var1++;

   $_SESSION['cart'] = $cartObj;  //給值並記錄在伺服器上
   $_SESSION['var1'] = $var1;

   //$var1++;  寫在這是錯誤的,當執行11行的$var1=10;伺服器並不會記錄到11,而是記錄到10

   $cartObj->addItem('P001',rand(1,10));  //將商品加入到購物車
   $cartObj->addItem('P002',rand(1,10));
   $list=$cartObj->getList();
   foreach ($list as $pid=>$qty){
       echo"{$pid}:{$qty}<br>";
   }

?>
<hr>
<a href="0526_lab2_4.php">Next</a>