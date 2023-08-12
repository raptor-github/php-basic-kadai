<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>課題15</title>
</head>

<body>
  <p>
    <?php
    // Foodクラス
    class Food {
      private $name;
      private $price;

      // コンストラクタ
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // priceプロパティの値を出力
      public function show_price() {
        echo $this->price;
      }
    }

    // Animalクラス
    class Animal {
      private $name;
      private $height;
      private $weight;

      // コンストラクタ
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // heightプロパティの値を出力
      public function show_height() {
        echo $this->height;
      }
    }

    // Foodクラスからインスタンス化
    $food = new Food('potato', 250);

    // $foodの各プロパティの値を出力
    print_r($food);
    // 改行
    echo '<br>';

    // Animalクラスからインスタンス化
    $animal = new Animal('dog', 60, 5000);

    // $animalの各プロパティを値を出力
    print_r($animal);
    // 改行
    echo '<br>';

    // メソッドにアクセス
    $food->show_price();
    // 改行
    echo '<br>';

    // メソッドにアクセス
    $animal->show_height();

    // 改行
    echo '<br>';
    ?>
  </p>
</body>

</html>