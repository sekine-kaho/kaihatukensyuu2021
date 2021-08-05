<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login</title>
    </head>


<?php
  $gold_pw = "222";
  $gold_id = "se";

  $reg_pw = "22";
  $reg_id = "ka";


  if($_POST['id'] == $gold_id AND $_POST['password'] == $gold_pw){
    echo "ゴールド会員！！！！";
  }elseif($_POST['id'] == $reg_id AND $_POST['password'] == $reg_pw){
    echo "ノーマル会員！！";
  }else{
    echo "ログイン失敗、、、";
  }

?>
