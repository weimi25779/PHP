<?php
    if(isset($_GET['account'])){
        $account=$_GET['account'];
        //$passwd=$_GET['passwd'];
        $passwd=password_hash($_GET['passwd'],PASSWORD_DEFAULT); //0601,使名碼-->暗碼
        $realname=$_GET['realname'];
        $sql="insert into member (account,passwd,realname)".
        "values ('{$account}','{$passwd}','{$realname}')";
        $db=@new mysqli('127.0.0.1','root','root','iii') or die("Server Busy");
        $db->query($sql);
        header("Location:0531_lab2.php");
    }
?>
<form>
<table>
    <tr>
        <th>Account</th>
        <td><input type="text" name="account"></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><input type="password" name="passwd"></td>
    </tr>
    <tr>
        <th>Real Name</th>
        <td><input type="text" name="realname"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="New"></td>
    </tr>
</table>
</form>