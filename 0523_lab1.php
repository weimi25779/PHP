<?php
if(isset($_GET['twid']))
{
    $twid=$_GET['twid'];
    $n12=substr($twid,0,1);
    echo $n12;
}
?>

<form>
    <input type="text" name="twid" />
    <input type="submit" value="check">
</form>
