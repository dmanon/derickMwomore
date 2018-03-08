<?php include('loginProcess.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<h2>Please enter your details below to register</h2>
<form method="POST" action="register.php"></form>
Username:<br>
<input type="text" name="username"><br>
eMail:<br>
<input type="email" name="email"><br>
Password:<br>
<input type="password" name="password_1"><br>
Confirm Password:<br>
<input type="password" name="password_2">
<input type="submit" name="reg_user" value="Register"><br>
Already a member?<a href="login.php"></a>

</body>
</html>