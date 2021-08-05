
<?php
$id = "sekine";
$ps = "111";

if($_POST['id'] == $id AND $_POST['password'] == $ps){
    echo "ログイン成功";
} else {
    echo "ログイン失敗";
}
?>
