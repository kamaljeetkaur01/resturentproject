<?php
include("include/settings.php");
include("admin/check_session.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$booktab = $_POST['loc'];
	$result=$con->query("SELECT * FROM location WHERE Price='".$booktab."'");
	foreach ($result as $row) {
		echo $row['Price'];
	}
}

?>