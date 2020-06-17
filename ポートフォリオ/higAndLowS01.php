<?php
	//ランダムな数値を取得する
	$leftCard = mt_rand(0,13);
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title>High & Lowゲーム</title>
	</head>
    <body>
		<div align="center">
      <font size="6">High&Lowゲーム</font>
			<hr>
			<?php
				echo 'ランダム数値： ',$leftCard,'';
			?>
		</div>
    </body>
</html>
