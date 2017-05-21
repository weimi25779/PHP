<?php
function calculate($operator,$x,$y)
{
    switch ($operator) {
        case 1 :
            $result = $x + $y;
            break;
        case 2 :
            $result = $x - $y;
            break;
        case 3 :
            $result = $x * $y;
            break;
        case 4 :
            $result = $x / $y;
            break;
        case 5 :
            $result = intval($x / $y)."......".$x % $y;
            break;
        default:
            $result = 0;
            break;
    }
    return  $result;
}
if (isset($_GET['xx']) && isset($_GET['yy']) && isset($_GET['operator'])) {
    $x = $_GET['xx'];
    $y = $_GET['yy'];
    $operator=$_GET['operator'];
    $result= calculate($operator,$x,$y);

}
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>簡易計算</title>
</head>

<body>
<form>
    <input type="text" name="xx" id="x" value="<?php echo $x; ?>"/>

    <select name="operator">
        <option selected >請選擇運算子</option>
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">*</option>
        <option value="4">/</option>
        <option value="5">%</option>
    </select>

    <input type="text" name="yy" id="y" value="<?php echo $y; ?>"/>
    <input type="submit" value="="/>
    <?php echo $result;?>

</form>
</body>
</html>
