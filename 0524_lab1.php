<!--<form action="0524_lab2.php">-->
<!--    Name:<input type="text" name="account" /><br>-->
<!--    Password:<input type="password" name="account" /><br>-->
<!--    //後面的account會蓋過前面的account-->
<!--    <input type="submit" value="送出">-->
<!--</form>-->

<form action="0524_lab2.php" method="get">
<!--    note、HTML 表單的 method 參數與 PHP 的接收方式必須是對應的，
例如表單 method 設定用 post 傳遞資料，PHP 必須使用 $_PSOT 來接收。
網址欄位會出現表單欄位的參數以及參數值，這就是 GET method 的特色-->
    Name:<input type="text" name="account" /><br>
    Password:<input type="password" name="password" /><br>
    Birthday:<input type="date" name="birthday" /><br>
    <select name="area">
        <option value="401">北屯區</option>
        <option value="402">南屯區</option>
        <option value="403">西屯區</option>
        <option value="404">東屯區</option>
    </select><br>
    <input type="radio" name="gender" value="F" checked/>Female
    <input type="radio" name="gender"value="M" />Male<br>
    <input type="checkbox" name="like[]" value="1"/>打電腦
    <input type="checkbox" name="like[]" value="2"/>打毛線
    <input type="checkbox" name="like[]" value="3"/>打電動<br>
    <input type="checkbox" name="like[]" value="4"/>打籃球
    <input type="checkbox" name="like[]" value="5"/>打小孩
    <input type="checkbox" name="like[]" value="6"/>打麻將<br>
<!--     若都是like,最後的值會蓋住前面的值-->
    <textarea name="memo"></textarea><br>
    <input type="file" name="upload"/><br>
    <input type="submit" name="btn" value="送出"/>
</form>