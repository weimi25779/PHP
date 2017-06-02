<script>
    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    function precheck() {
        var account =
            document.getElementById('account').value;
        alert(account);
        xmlhttp.onreadystatechange = callBack1;
        xmlhttp.open("GET", "0602_lab4.php?a="+account, true);
        xmlhttp.send();
    }

    function callBack1() {
        if (this.readyState == 4 && this.status == 200) {
            var result = this.responseText;
            if (result != 'OK'){
                document.getElementById('crs').innerHTML = '重複';
            }else{
                document.getElementById('crs').innerHTML = '很好';
            }
        }
    }
</script>
<form action="addAccount.php" method="post">
    <input name="account" /><br>
    <input type="password" name="passwd" /><br>
    <input name="rname" /><br>
    <input type="submit" value="add" />
</form>
<hr>
<div id="test1"></div>
