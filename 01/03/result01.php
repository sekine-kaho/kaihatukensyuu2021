<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
  </head>


<?php
$id = "sekine";
$ps = "111";

if($_POST['id'] == $id AND $_POST['password'] == $ps){
    echo "ログイン成功";
} else {
    echo "ログイン失敗";
}
?>
