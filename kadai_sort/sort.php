<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
		function sort_2way($array, bool $order = false) 
		{
			if ($order)
			{
				echo "昇順にソートします。<br>";
				sort($array);
			}
			else 
			{
				echo "降順にソートします。<br>";
				rsort($array);
			}

			foreach ($array as $num)
			{
				echo $num."<br>";
			}
		}

		// ソートする配列を宣言
		$nums = [15, 4, 18, 23, 10 ];

		sort_2way($nums, true);
		sort_2way($nums);
        ?>
    </p>
</body>

</html>