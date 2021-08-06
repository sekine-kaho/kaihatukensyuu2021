<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>loop</title>
    </head>

    <body>
      <h1>行・列テーブル</h1>
      <form method='post' action='loop03.php'>
          <input type="text" name="li">行
          <input type="text" name="co">列
          <br><br>
          <input type="submit" value="送信">
          <input type="reset" value="リセット">
      </form>
      <br><br>

      <table border="1" style="border-collapse:collapse;">
          <?php
          for($i=1;$i<=$_POST['li'];$i++){
              echo "<tr>";
             for($j=1;$j<=$_POST['co'];$j++){
                 echo  "<td>" .$i . "-" . $j . "</td>";
             }
              echo "</tr>";
            }
          ?>
      </table>

    </body>
 </html>
