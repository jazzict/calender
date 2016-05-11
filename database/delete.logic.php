<?php 

$db = new mysqli('localhost','root','','calender');



if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	
	if (isset($_GET['id'])) {

		$id = $_GET['id'];
		$query = "SELECT * FROM `birthdays` INNER JOIN months ON birthdays.month_id=months.id WHERE birthdays.id = $id";
		$result = $db->query($query);
		$birthday = $result->fetch_assoc();

	} else {

		header("Location: ./index.php");

	}

} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if ($_POST['bevestiging'] == "ja") {

		$id = $_POST['id'];
		$query = "DELETE FROM `calender`.`birthdays` WHERE `birthdays`.`id` = $id";
		$result = $db->query($query);

		header("Location: ./index.php");
	} else {

		header("Location: ./index.php");
	}
}
//header("Location: ../index.php");


 

 ?>
