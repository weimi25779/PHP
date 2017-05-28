<?php
if(isset($_GET['twid'])) {
    $twid=$_GET['twid'];
    if(preg_match('/^[A-Z][12][0-9]{8}$/',$twid)>0){
        // >0:表示True , <0:表示False
        $alphabet=substr($twid,0,1);  //身分證字號第1碼,例,回傳1
        $letters='ABCDEFGHJKLMNPQRSTUVXYWZIO'; //身分證字號開頭
        //轉換字元
        $n12=strpos($letters,$alphabet)+10;
        //strops(): 返回字符串($alphabet)在另一個字符串($letters)中第一次出現的位置
        //$n12可以視為$n1+$n2,例如:F(新北市)=>15,15/10=1 and 15%10=5,字串相加1+5=>15
        // A傳換字元=>10,A在第0位,0+10=10
        $n1 = (int)($n12 / 10); //第1碼
        $n2 = $n12 % 10;   //第1碼
        $n3=substr($twid,1,1); //第2碼
        $n4=substr($twid,2,1);
        $n5=substr($twid,3,1);
        $n6=substr($twid,4,1);
        $n7=substr($twid,5,1);
        $n8=substr($twid,6,1);
        $n9=substr($twid,7,1);
        $n10=substr($twid,8,1);
        $n11=substr($twid,9,1);
        $sum=$n1*1+$n2*9+$n3*8+$n4*7+$n5*6+$n6*5+$n7*4+$n8*3+$n9*2+$n10*1+$n11*1; //維基百科:身分證
        if ($sum %10 == 0){
            echo 'OK';
        }else{
            echo 'XX';
        }

    }else{
       echo 'XX';
    }

}
?>

<form>
    <input type="text" name="twid" />
    <input type="submit" value="check">
</form>
