<?php
	require_once "edit.logic.php";
?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<h2>Wijzigen:</h2><br>
	<form method="POST">
	<input type="hidden" name="id" value="<?=$birthday['id']?>">
	<label>Naam:<input type="text" name="name" value="<?=$birthday['name']?>"></label><br>
	<label>Jaar:<input type="text" name="year" value="<?=$birthday['year']?>"></label><br>
	<label>Dag:<input type="text" name="day" value="<?=$birthday['day']?>"></label><br>
	<label>Maand:<input type="text" name="month" value="<?=$birthday['month']?>"></label><br>
	<input type="submit" value="Verzenden">
	</form>
	<a href="index.php"><button>Annuleren</button></a>
</body>
</html>