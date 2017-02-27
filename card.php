<?php require 'conn.php'; 

	$card = $_POST['cardnumber'];
	$sec = $_POST['seccode'];

	$sql = "INSERT INTO member (cardnumber,securitycode) VALUES (".$card.",'".$sec."')";


	$query = mysqli_query($conn,$sql);

	if (!$query) {
		# code...
		echo "ERROR";
	}else
	{
		header("Location:index.php");
	}
?>
?>