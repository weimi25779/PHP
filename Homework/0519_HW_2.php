<?php
function chuckyear($y){
    if(($y % 4==0) && ($y % 100!=0) || ($y % 400==0))
        $result='為閏年';
    else
        $result='不為閏年';
    return $result;
}
if(isset($_GET['year'])){
    $y=$_GET['year'];
    $result=chuckyear($y);
}
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>閏年判斷</title>
</head>

<body>
    <form>
      <input type="text" name="year" id="year" value="請輸入年份,例如:2000"/>
      <input type="submit" value="送出"/>
      <?php echo $result; ?>
    </form>
</body>
</html>
