<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>loop</title>
  </head>


<body>

    <form method='post' action='loop01.php'>
        <input type="text" name="number" size="1">行のテーブルを生成する
        <br></br>
        <input type="submit" value="送信">
        <input type="reset" value="リセット">
    </form>
        <br></br>

    <table border="1" style="border-collapse:collapse;">
        <?php
        for($i=0; $i < $_POST['number']; $i++){
            echo"<tr><td>梶谷</td><td>乙坂</td><td>楠本</td><td>神里</td>
                <td>筒香</td></tr>";
        }
        ?>
    </table>
</body>
</html>
