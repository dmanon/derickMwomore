<?php 

if (isset($_POST['uName'])) {

	$connect=mysqli_connect("localhost","root","","LOGIN");
	if (!$connect) {
		echo "faild to connect";
	}
	else{
		extract($_POST);
		$insert = "INSERT INTO `USERS` (`id`, `UserName`, `password`) VALUES (NULL, '$uName', '$pass')";
		// cheking if it has submitted correctly
		$query = mysqli_query($connect,$insert);
		if ($query) {
			echo "successfully submitted";
		}
	}
}
?>