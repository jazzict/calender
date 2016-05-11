<?php
	
	$db = new mysqli('localhost','root','','calender');

	$query = "SELECT `birthdays`.*, `months`.month FROM `birthdays` INNER JOIN months ON birthdays.month_id=months.id ORDER BY month_id, day, year asc";
	$result = $db->query($query);
	$bdays = $result->fetch_all(MYSQLI_ASSOC);

	$currMonth = null;
	$currDay = null;
?>