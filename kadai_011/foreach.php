<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>課題11</title>
</head>

<body>
  <p>
    <?php
    // 連想配列にキーと値と代入
    $products = [
      '名前' => '玉ねぎ',
      '値段' => 200,
      '産地' => '北海道'
    ];

    // 連想配列のキーと値を出力し改行
    foreach ($products as $key => $value) {
      echo "{$key} : {$value} <br>";
    }

    ?>
  </p>
</body>

</html>