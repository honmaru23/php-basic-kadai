<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
<?php

// Step 1. クラスを作成する
class Food {
    public $name;
    public $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price(): void {
        echo $this->price . '<br>';
    }
}

class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height(): void {
        echo $this->height . '<br>';
    }
}

// Step 2. インスタンスを作成し、出力する
$food = new Food('potato', 250);
$animal = new Animal('dog', 60, 5000);

print_r($food);
echo '<br>';
print_r($animal);
echo '<br>';

// Step 3. メソッドへアクセスする
$food->show_price();
$animal->show_height();

?>
   </p>
</body>

</html>