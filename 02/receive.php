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
          echo "年齢は " . $_GET['age'] . " 歳です<br/>";
          echo  "性別は「 " . $_GET['radio'] . "」です。<br/>";
          echo "住所は " . $_GET['address'] . " です。<br/>";
          echo "職種は " . $_GET['job'] . " です。<br/>";
          echo "勤務地は " . $_GET['kinnmuti'] . " です。<br/>";
          echo "コメントは " . $_GET['job'] . " といただきます。<br/>";
      ?>
  </body>
</html>
