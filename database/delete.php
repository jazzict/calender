<?php
	require_once "delete.logic.php";
?>
<html>
<head>
	<title>Delete</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<h2> Weet je zeker dat je deze verjaardag wil verwijderen </h2>
	<form method="POST" action="delete.php">
		<input type="hidden" name="id" value="<?=$birthday['id']?>"><br>
		<input type="text" name="name" value="<?=$birthday['name']?>"><br>
		<input type="text" name="day" value="<?=$birthday['day']?>"><br>
		<input type="text" name="month" value="<?=$birthday['month']?>"><br>
		<input type="text" name="year" value="<?=$birthday['year']?>"><br>
		<input type="submit" name="bevestiging" value="Ja">
		<input type="submit" name="bevestiging" value="Nee">
	</form>
</body>
</html>