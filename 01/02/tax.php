<!DOCTYPE html>
        <html>
            <head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <title>消費税計算</title>
            </head>
            <body>
                <h1>消費税計算</h1>
                <form method="post" action="tax.php">
                <table border="1" style="border-collapse:collapse;">

<table border>
        <tr>
            <th>商品名</th>
            <th>単価</th>
            <th>個数</th>
            <th>税率</th>
        </tr>
        <tr>
                       <td><input type="text" name="shohin1" size="20" maxlength="20" /></td>
                       <td><input type="text" name="cost1" size="20" maxlength="20" /></td>
                       <td><input type="text" name="kazu1" size="3" maxlength="3" />個</td>
                       <td>
                           <input type="radio" name="zei1" value="8" />8%
                           <input type="radio" name="zei1" value="10" />10%
                       </td>
        </tr>

        <tr>
                       <td><input type="text" name="shohin2" size="20" maxlength="20" /></td>
                       <td><input type="text" name="cost2" size="20" maxlength="20" /></td>
                       <td><input type="text" name="kazu2" size="3" maxlength="3" />個</td>
                       <td>
                           <input type="radio" name="zei2" value="8" />8%
                           <input type="radio" name="zei2" value="10" />10%
                       </td>
        </tr>

        <tr>
                       <td><input type="text" name="shohin3" size="20" maxlength="20" /></td>
                       <td><input type="text" name="cost3" size="20" maxlength="20" /></td>
                       <td><input type="text" name="kazu3" size="3" maxlength="3" />個</td>
                       <td>
                           <input type="radio" name="zei3" value="8" />8%
                           <input type="radio" name="zei3" value="10" />10%
                       </td>
        </tr>

        <tr>
                       <td><input type="text" name="shohin4" size="20" maxlength="20" /></td>
                       <td><input type="text" name="cost4" size="20" maxlength="20" /></td>
                       <td><input type="text" name="kazu4" size="3" maxlength="3" />個</td>
                       <td>
                           <input type="radio" name="zei4" value="8" />8%
                           <input type="radio" name="zei4" value="10" />10%
                       </td>
        </tr>
                      <td colspan="4" style="text-align:left;"><input type="submit" value="送信"><input type="reset" value="リセット"></td>
                      <br></br>
                      <br></br>
        </table>

<table/border>


        <tr>
            <th>商品名</th>
            <th>単価</th>
            <th>個数</th>
            <th>税率</th>
        </tr>
        <tr>
        
                    <td><input type="text" name="shohin1" size="20" maxlength="20" /></td>
                       <td><input type="text" name="cost1" size="20" maxlength="20" /></td>
                       <td><input type="text" name="kazu1" size="3" maxlength="3" />個</td>
                       <td>
                           <input type="radio" name="zei1" value="8" />8%
                           <input type="radio" name="zei1" value="10" />10%
                       </td>
        </tr>


</table>

</html>
</head>
