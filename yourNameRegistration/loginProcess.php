<?php 
session_start(oid);
 //initialize variables
	$userName="";
	$email="";
	$errors=array();
	// connetc now to the DB
	$db=mysqli_connect("localhost","root","Registration_2")
	// registration code
	if (isset($_POST['reg_user'])) {
		// receive all input values for the registration form
		$username=mysqli_real_escape_string($db,$_POST['username']);
		$email=mysqli_real_escape_string($db,$_POST['email']);
		$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
		$password_2=mysqli_real_escape_string($db,$_POST['password_2']);
		// form validation:ensure that the form is corectly filled
		// use array_push() to get the co respondong error to $array
		if (empty($username)) {

			array_push($errors,"username recquired");
		}
		if (empty($email)) {

			array_push($errors,"email recquired");
		}
		if (empty($password_1)) {

			array_push($errors,"password_1 recquired");
		}
		if (empty($password_2)) {

			array_push($errors,"password_2 recquired");
		}
		if ($password_1 != $password_2) {

			array_push($errors, "passwords do not match");
		}
		// check the bd to make sure the user doesnt exist with the same username and password
		$User_Check_Query="select * from users where username='$username' or email='$email' limit 1";
		$result=mysqli_query($db,$User_Check_Query);
		$user=mysqli_fetch_assoc($result);
		if ($user['username']===$username) {

			array_push($errors, "username already exists ")
		}
		if ($email['email']===$email) {

			array_push($errors, "email already exists ")
	}
	// finally register the user if there are no errors in the form
	if (count($errors)=0) {
		$password=md5($password); 
		// encrypt your password before saving in the db
	 $query="INSERT INTO `users` (`Id`, `Uname`, `Email`, `Password`) VALUES (NULL, '$username', '$email', '$password')";
	 mysqli_query($db,$query);
	 $_session['username'] = $username;
	 $_session['success'] = "you are now logged in";
	 header("location:index.php");
	}
}
// log in code
if (isset($_POST['login_user'])) {
	// get inputs from the user 
	$username= mysqli_real_escape_string($db,$_POST['username']);
	$password= mysqli_real_escape_string($db,$_POST['password']);
	if (empty($username)) {
		array_push($errors, "username recquired");
	}
	if (empty($password)) {
		array_push($errors, "password recquired");
	}
	// check if there are no errors in the input
	if (count($errors)=0) {
		$password=md5($password);
		$query="select * from users where username='$username' and password=$password";
		$result=mysqli_query(
			$db,$query);
		if (mysqli_num_rows($result)==1) {
		$_SESSION['username']=$username;
		$_SESSION['success']="your are now logged 
		in";
		header("location:index.html")
	
		}else{
			array_push($errors,"wrong username / password combination");
		}
	}
}
  ?>