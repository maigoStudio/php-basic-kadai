<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php

	$scores = [
		"score1" => 80,
		"score2" => 60,
		"score3" => 55,
		"score4" => 40,
		"score5" => 100,
		"score6" => 25,
		"score7" => 80,
		"score8" => 95,
		"score9" => 30,
		"score10" => 60,
	];

	$total = 0;
	foreach ($scores as $score => $value)
	{
		$total += $value;
	}

	echo $total / 10;

	?>
</body>

</html>
