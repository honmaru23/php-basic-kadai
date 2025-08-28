<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
    function sortAndDisplay(array $array): void {
    // 昇順にソート
    echo "昇順にソートします<br>";
    $asc_array = $array;
    sort($asc_array);
    foreach ($asc_array as $num) {
        echo $num . "<br>";
    }

    // 降順にソート
    echo "降順にソートします<br>";
    $desc_array = $array;
    rsort($desc_array);
    foreach ($desc_array as $num) {
        echo $num . "<br>";
    }
}

$nums = [15, 4, 18, 23, 10];

sortAndDisplay($nums);
        ?>
    </p>
</body>

</html>