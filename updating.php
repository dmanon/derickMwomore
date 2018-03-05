<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	<input type="text" name="Uname">
	<input type="password" name="PASS">
	<input type="submit" name="submit">
</form>

</body>
</html>
<?php 
$connection = mysqli_connect("localhost","root","","LOGIN");
if (isset($_POST['Uname'])&&isset($_POST['id'])) {
	extract($_POST);
	mysqli_query($connection,"UDATE USERS SET UserName='$Uname' WHERE id=$id");
}header("location:FetchUser.php");

 ?>