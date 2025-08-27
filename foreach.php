<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編kadai_011</title>
</head>

<body>
   <p>
       <?php
$data = [
    '名前' => '玉ねぎ',
    '値段' => 200,
    '産地' => '北海道'
];

foreach ($data as $key => $value) {
    echo "{$key}:{$value}<br>";
}
?>
   </p>
   <?php

$profile = [
    'Id' => 1,
    '名前' => '侍太郎',
    '年齢' => 30
];

foreach ($profile as $key => $value) {
    echo $key . ':' . $value . '<br>';
}

?>
</body>

</html>