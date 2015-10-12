<?php
	session_start(); 

	date_default_timezone_set('America/Los_Angeles');

	if(isset($_POST["building"]) && $_POST["building"] == "farm")
	{
		$amount = rand(10, 20);
		$_SESSION["gold"] += $amount;
		array_push($_SESSION["activity"], "<h5 class='green'>You entered a " . $_POST["building"] . " and earned " . $amount . " golds.   (" . date("F jS Y g:ia") . ")</h5>");
		header("Location: index.php");
		die();
	}

	else if(isset($_POST["building"]) && $_POST["building"] == "cave")
	{
		$amount = rand(5, 10);
		$_SESSION["gold"] += $amount;
		array_push($_SESSION["activity"], "<h5 class='green'>You entered a " . $_POST["building"] . " and earned " . $amount . " golds.   (" . date("F jS Y g:ia") . ")</h5>");
		header("Location: index.php");
		die();
	}
	else if(isset($_POST["building"]) && $_POST["building"] == "house")
	{
		$amount = rand(2, 5);
		$_SESSION["gold"] += $amount;
		array_push($_SESSION["activity"], "<h5 class='green'>You entered a " . $_POST["building"] . " and earned " . $amount . " golds.   (" . date("F jS Y g:ia") . ")</h5>");
		header("Location: index.php");
		die();
	}
	else if(isset($_POST["building"]) && $_POST["building"] == "casino")
	{
		$amount = rand(0, 50);
		$give_or_take = rand(1,10);
		if($give_or_take <= 7)
		{
			$_SESSION["gold"] -= $amount;
			array_push($_SESSION["activity"], "<h5 class='red'>You entered a " . $_POST["building"] . " and lost " . $amount . " golds...   Ouch..  (" . date("F jS Y g:ia") . ")</h5>");

		}
		else if($give_or_take > 7)
		{
			$_SESSION["gold"] += $amount;
			array_push($_SESSION["activity"], "<h5 class='green'>You entered a " . $_POST["building"] . " and earned " . $amount . " golds.   (" . date("F jS Y g:ia") . ")</h5>");

		}
		header("Location: index.php");
		die();
	}

	if(isset($_POST["restart"]) && $_POST["restart"] == "restart")
	{
		session_destroy();
		header("Location: index.php");
		die();
	}
?>