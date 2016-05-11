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
	
	if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year']) ) {

		$id = $_POST['id'];
		$name = $_POST['name'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		$query = "UPDATE `calender`.`birthdays` SET `name` = '$name', `day` = '$day', `month_id` = '$month', `year` = '$year' WHERE `birthdays`.`id` = $id";

		echo $query;

		$result = $db->query($query);

		//header("Location: ./index.php");
		//exit();
	} else {
		header("Location: ./index.php");
	}
}
?>



	