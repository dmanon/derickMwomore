<?php 

if (isset($_POST['PName'])) {

	$connect=mysqli_connect("localhost","root","","StoreManagementSystem");
	if (!$connect) {
		echo "failed to connect";
	}
	else{
		extract($_POST);
		$insert = "INSERT INTO `Stock` (`ProdId`, `ProdName`, `Price`, `AmountInStock`) VALUES (NULL, '$PName', '$Price', '$StockAmount')";
		// cheking if it has submitted correctly
		$query = mysqli_query($connect,$insert);
		if ($query) {
			echo "successfully added product";
		}
	}
}
header(location:"AddStock.php");
?>