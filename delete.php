<?php 
$connect=mysqli_connect("localhost","root","","LOGIN");
if (isset($_GET['id'])) {
	extract($_GET);
	mysqli_query($connect,"delete from USERS where id=$id");
}
header("location:FetchUser.php");

?>