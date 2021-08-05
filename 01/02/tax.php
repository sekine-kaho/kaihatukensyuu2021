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

            <tr>
                       <td><input type="text" name="shohin5" size="20" maxlength="20" /></td>
                       <td><input type="text" name="cost5" size="20" maxlength="20" /></td>
                       <td><input type="text" name="kazu5" size="3" maxlength="3" />個</td>
                       <td>
                           <input type="radio" name="zei5" value="8" />8%
                           <input type="radio" name="zei5" value="10" />10%
                       </td>
            </tr>
                      <td><colspan="4" style="text-align:left;"><input type="submit" value="送信"><input type="reset" value="リセット"></td>
                      <br></br>
                      <br></br>
        </table>

        <table/border>
            <tr>
              <th>商品名</th>
              <th>価格（単位：円、税抜き）</th>
              <th>個数</th>
              <th>税率</th>
              <th>小計</th>
            </tr>

            <tr>
                          <td><?php echo $_POST['shohin1'];?></td>
                          <td><?php echo $_POST['cost1'];?></td>
                          <td><?php echo $_POST['kazu1'];?></td>
                          <td><?php echo $_POST['zei1'];?></td>
                          <td>
                              <?php
                                  $cost_1 = $_POST['cost1'];
                                  $kazu = $_POST['kazu1'];
                                  $zei = $_POST['zei1'];
                                  $cost_1 = $cost_1 * $kazu * (1 + ($zei / 100));
                                  echo $cost_1 . "円（税込み）";
                              ?>
                          </td>
            </tr>

            <tr>
                          <td><?php echo $_POST['shohin2'];?></td>
                          <td><?php echo $_POST['cost2'];?></td>
                          <td><?php echo $_POST['kazu2'];?></td>
                          <td><?php echo $_POST['zei2'];?></td>
                          <td>
                              <?php
                                  $cost_2 = $_POST['cost2'];
                                  $kazu = $_POST['kazu2'];
                                  $zei = $_POST['zei2'];
                                  $cost_2 = $cost_2 * $kazu * (1 + ($zei / 100));
                                  echo $cost_2 . "円（税込み）";
                              ?>
                          </td>
            </tr>

            <tr>
                          <td><?php echo $_POST['shohin3'];?></td>
                          <td><?php echo $_POST['cost3'];?></td>
                          <td><?php echo $_POST['kazu3'];?></td>
                          <td><?php echo $_POST['zei3'];?></td>
                          <td>
                              <?php
                                  $cost_3 = $_POST['cost3'];
                                  $kazu = $_POST['kazu3'];
                                  $zei = $_POST['zei3'];
                                  $cost_3 = $cost_3 * $kazu * (1 + ($zei / 100));
                                  echo $cost_3 . "円（税込み）";
                              ?>
                          </td>
            </tr>

            <tr>
                          <td><?php echo $_POST['shohin4'];?></td>
                          <td><?php echo $_POST['cost4'];?></td>
                          <td><?php echo $_POST['kazu4'];?></td>
                          <td><?php echo $_POST['zei4'];?></td>
                          <td>
                              <?php
                                  $cost_4 = $_POST['cost4'];
                                  $kazu = $_POST['kazu4'];
                                  $zei = $_POST['zei4'];
                                  $cost_4 = $cost_4 * $kazu * (1 + ($zei / 100));
                                  echo $cost_4 . "円（税込み）";
                              ?>
                          </td>
            </tr>

            <tr>
                          <td><?php echo $_POST['shohin5'];?></td>
                          <td><?php echo $_POST['cost5'];?></td>
                          <td><?php echo $_POST['kazu5'];?></td>
                          <td><?php echo $_POST['zei5'];?></td>
                          <td>
                              <?php
                                  $cost_5 = $_POST['cost5'];
                                  $kazu = $_POST['kazu5'];
                                  $zei = $_POST['zei5'];
                                  $cost_5 = $cost_5 * $kazu * (1 + ($zei / 100));
                                  echo $cost_5 . "円（税込み）";
                              ?>
                          </td>
            </tr>



            <tr>
                <td colspan="5" style="text-align:left;">合計</td>
                <td>
                    <?php
                        echo $cost = $cost_1 + $cost_2 + $cost_3 + $cost_4  + $cost_5 . "円（税込み）";
                    ?>
                </td>
           </tr>

       </table>

    </body>
</html>
