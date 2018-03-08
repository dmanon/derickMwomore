<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		$_SESSION['msg']="you must login first ";
		header("location:Login.php");
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location:Login.php");}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>HomePage</title>
 </head>
 <body>
 <h1>Welcome to our Mgt system</h1>
 <!-- notification -->
 <?php 
 if (isset($_SESSION['success'])){
 echo $_SESSION['success'];
 unset($_SESSION['success']);
 }?>
 <!-- logged in user info -->
 <?php if (isset($_SESSION['username'])) {
 	echo "Welcome".$_SESSION['username'];
 }?>
 echo "<a href='index.php?logout='1'>Logout</a> ";

 </body>
 </html>