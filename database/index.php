<?php 
	require_once'index.logic.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Verjaardags Kalender</title>
	<link rel="stylesheet" type="text/css" href="calender.css">

</head>
<body>

		<?php foreach ($bdays as $bday) {

	 		if ($currMonth != $bday['month_id']) {
	 			$currMonth = $bday['month_id'];
 				echo "<h1>" . $bday['month'] . "</h1>";
 			}
 			if ($currDay != $bday['day']) {
	 			$currDay = $bday['day'];
 				echo "<h2>" . $bday['day'] . "</h2>";
 			} ?>
 			<p>
 			<a href="edit.php?id=<?= $bday['id']; ?>"><?= $bday['name']; ?> (<?= $bday['year']; ?>)</a>
 			<a href="delete.php?id=<?= $bday['id']; ?>">x</a>
 			</p>
	<?php 
	}
	?>
	<p><a href="create.php"> Toevoegen </a></p>
</body>
</html>

