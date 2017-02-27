<?php
	$localhost = "localhost";
	$username = "root";
	$password = "";
	$db_name = "starbuck";

	$conn = mysqli_connect($localhost,$username,$password,$db_name);
	mysqli_query($con,"SET NAMES UTF8");
?>