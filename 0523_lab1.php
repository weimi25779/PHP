<?php
if(isset($_GET['twid']))
{
    $twid=$_GET['twid'];
    $n12=substr($twid,0,1);
    //echo $n12;
    $str='A123456789';
    $reg='/^[A-Z][12][0-9]{8}$/';  //正規表示式
    // ^ : 開頭  , $ : 結尾
    //[A-Z]第1碼,[12]第2碼(性別),[0-9]{8}第3~10碼([0-9]{8}重複8次)
    //例10~99:[1-9][0-9]
    $r=preg_match($reg,$str); //以正規表示式,檢查字串
    echo $r; //1: true ; 0: false

    //手機號碼
    //$str='0911122557';
    //$reg='/^09[0-8][0-9]-[0-9]{6}$/';
    //$r=preg_match($reg,$str);
    //echo $r;
}
?>

<form>
    <input type="text" name="twid" />
    <input type="submit" value="check">
</form>
