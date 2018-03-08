<?php  include('loginProcess.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<h2>Welcome. Please login</h2>
<form method="POST" action="login.php"></form>

Username:<br>
<input type="text" name="username"><br>
Password:<br>
<input type="password" name="password">
<input type="submit" name="login_user" value="Login"><br>
Not yet a member? <a href="register.php"></a>Register

</body>
</html>