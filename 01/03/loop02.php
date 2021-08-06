<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>loop</title>
  </head>



    <body>
        <h1>行・列テーブル</h1>
        <form method='post' action='loop02.php'>
            <p>
                <input type="text" name="li"/>行
                <input type="text" name="co"/>列
                <br><br>
                <input type="submit" value="送信">
                <input type="reset" value="リセット">
            </p>

            <table border="1">
                <?php
                        for($i=0; $i < $_POST['li']; $i++)
                        {
                            echo "<tr>";
                            for($j=0; $j < $_POST['co']; $j++)
                            {
                                echo "<td>テスト</td>";
                            }
                            "</tr>";
                        }
                    ?>
            </table>
        </form>
    </body>
</html>
