<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>課題5</title>
</head>

<body>
  <?php
  // 変数に点数を代入
  $score1 = 80;
  $score2 = 60;
  $score3 = 55;
  $score4 = 40;
  $score5 = 100;
  $score6 = 25;
  $score7 = 80;
  $score8 = 95;
  $score9 = 30;
  $score10 = 60;

  // 合計点を計算
  $score_sum = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

  // 平均点を計算
  $score_avg = $score_sum / 10;

  // 平均点を出力
  echo $score_avg;
  ?>
</body>

</html>