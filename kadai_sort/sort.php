<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
    function sort_2way(array $array, string $order = 'asc'): void {
    // 昇順にソート
    if ($order === 'asc') {
        echo "昇順にソートします<br>";
        sort($array);
    // 降順にソート
    } elseif ($order === 'desc') {
        echo "降順にソートします<br>";
        rsort($array);
    } 

    // ソートされた配列を出力
    foreach ($array as $num) {
        echo $num . "<br>";
    }
}

$nums = [15, 4, 18, 23, 10];

// 昇順でソートし、出力
sort_2way($nums, 'asc');


// 降順でソートし、出力
sort_2way($nums, 'desc');
        ?>
    </p>
</body>

</html>