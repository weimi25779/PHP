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
        xmlhttp.open("GET", "0602_lab4.php?a="+account, true); //a在0602_lab4.php
        xmlhttp.send();
    }

    function callBack1() {
        if (this.readyState == 4 && this.status == 200) {
            var result = this.responseText;
            //document.getElementById('test1').innerHTML=result;
            if (result != 'OK'){ //字串比對,是否為'OK'
                document.getElementById('crs').innerHTML = '重複';
            }else{
                document.getElementById('crs').innerHTML = '很好';
            }
        }
    }
</script>
<form action="addAccount.php" method="post">
    <!-- JavaScript onblur事件(event)用來監聽元素的失焦情況
               onblur="將觸發的 javascript function" -->
    <input id='account' name="account" onblur="precheck()" />
    <span id="crs"></span><br>
    <input type="password" name="passwd" /><br>
    <input name="rname" /><br>
    <input type="submit" value="add" />
</form>
<hr>
<!--<div id="test1"></div>-->
