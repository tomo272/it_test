<?php
	$leftCard = mt_rand(0,13);
	$cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
					"07.png","08.png","09.png","10.png","11.png","12.png","13.png",);
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
				echo '<img src="../cards/',$cards[$leftCard],'">';
			?>
			<img alt="bg画像" src="../cards/bg.png">
		</div>
    </body>
</html>
