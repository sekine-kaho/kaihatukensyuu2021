<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>登録情報結果</title>
  </head>
  <body>
     
      <?php
          echo "お名前は". $_GET['name'] . " さんです<br/>";
          echo "年齢は" . $_GET['age'] . " 歳です<br/>";
          echo "性別". $_GET['radio'] . " です<br/>";
          echo "習い事は"
          . $_GET['number'][0] . " "
          . $_GET['number'][1] . " "
          . $_GET['number'][2] . " "
          . $_GET['number'][3] . "です <br/>";
          echo "住所" . $_GET['address'] . " です<br/>";
          echo "職種" . $_GET['job'] . " です<br/>";
          echo "勤務地は" . $_GET['kinnmuti'] . " です<br/>";
          echo "コメント" . $_GET['kansou'] . " です<br/>";
      ?>
  </body>
</html>
