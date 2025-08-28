<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
    function sort_2way(array $array, string $order = 'asc'): array {
    if ($order === 'desc') {
        rsort($array); // 降順ソート
    } else {
        sort($array);  // 昇順ソート（デフォルト）
    }
    return $array;
}

$nums = [15, 4, 18, 23, 10];

// 昇順でソート
echo "昇順にソートします<br>";
$sorted_asc = sort_2way($nums, 'asc');
foreach ($sorted_asc as $num) {
    echo $num . "<br>";
}


// 降順でソート
echo "降順にソートします<br>";
$sorted_desc = sort_2way($nums, 'desc');
foreach ($sorted_desc as $num) {
    echo $num . "<br>";
}
        ?>
    </p>
</body>

</html>