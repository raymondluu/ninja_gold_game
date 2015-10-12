<?php 
	session_start();

	if(!isset($_SESSION["gold"]))
	{
		$_SESSION["gold"] = 0;
	}
	if(!isset($_SESSION["activity"]))
	{
		$_SESSION["activity"] = array();
	}

	//var_dump($_SESSION);
?>
<html>
	<head>
		<title>Make Money!!!</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
			<div class="gold_info">
				<h1 class="info">Your Gold:</h1><h1 class="info_num"><?= $_SESSION["gold"] ?></h1>
			</div>
			<div class="buildings">
				<form class="get_gold" action="process.php" method="post">
					<p>Farm</p>
					<p>(earns 10 - 20 golds)</p>
					<input type="hidden" name="building" value="farm">
					<input type="submit" value="Find Gold!">
				</form>
				<form class="get_gold" action="process.php" method="post">
					<p>Cave</p>
					<p>(earns 5 - 10 golds)</p>
					<input type="hidden" name="building" value="cave">
					<input type="submit" value="Find Gold!">
				</form>
				<form class="get_gold" action="process.php" method="post">
					<p>House</p>
					<p>(earns 2 - 5 golds)</p>
					<input type="hidden" name="building" value="house">
					<input type="submit" value="Find Gold!">
				</form>
				<form class="get_gold" action="process.php" method="post">
					<p>Casino!</p>
					<p>(earns/takes 0 - 50 golds)</p>
					<input type="hidden" name="building" value="casino">
					<input type="submit" value="Find Gold!">
				</form>
			</div>
			<h4>Activites:</h4>
			<div class="activity">
					<?php
						for($i=count($_SESSION["activity"]) - 1; $i >= 0; $i--)
						{ ?>
							<h5><?= $_SESSION["activity"][$i] ?></h5>
					<?php }
					?>
			</div>
			<form action="process.php" method="post">
				<input type="hidden" name="restart" value="restart">
				<input type="submit" value="Restart!">
			</form>
		</div>
	</body>
</html>