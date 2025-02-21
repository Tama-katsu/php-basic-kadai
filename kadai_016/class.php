<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP課題</title>
</head>

<body>
  <p>
    <?php
    class Food
    {
      //プロパティの設定
      private $name;
      private $price;

      //コンストラクタ
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      //priceを表示する
      public function show_price()
      {
        echo $this->price;
        echo '<br>';
      }
    };

    class Animal
    {
      //プロパティの設定
      private $name;
      private $height;
      private $weight;

      //コンストラクタ
      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      //heightを表示する
      public function show_height()
      {
        echo $this->height;
        echo '<br>';
      }
    };

    //インスタンスを作成
    $food = new Food('patato', 250);
    print_r($food);
    echo '<br>';

    //インスタンスを作成
    $animal = new Animal('dog', 60, 5000);
    print_r($animal);
    echo '<br>';

    //メソッドの呼び出し
    $food->show_price();
    $animal->show_height();    ?>
  </p>
</body>

</html>