<form action="0529_practice1_2.php" method="get">
    Name:<input type="text" name="account"/><br>
    Password:<input type="password" name="password"/><br>
    Birthday:<input type="date" name="birthday"><br>
    <select name="area">
        <option>北屯區</option>
        <option>南屯區</option>
        <option>東屯區</option>
        <option>西屯區</option>
    </select><br>
    <input type="radio" name="gender" value="F" />Female
    <input type="radio" name="gender" value="M" checked/>Male<br>
    <input type="checkbox" name="like[]" value="1"/>打電玩
    <input type="checkbox" name="like[]" value="2"/>打麻將
    <input type="checkbox" name="like[]" value="3"/>打籃球<br>
    <input type="checkbox" name="like[]" value="4"/>打P孩
    <input type="checkbox" name="like[]" value="5"/>打毛線
    <input type="checkbox" name="like[]" value="6"/>打羽球<br>
    <textarea name="memo"></textarea><br>
    <input type="file" name="upload"/><br>
    <input type="submit" name="btn" value="送出"/>

</form>
