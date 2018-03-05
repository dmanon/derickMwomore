<!DOCTYPE html>
<html>
<head>
	<title>Fetching Data</title>
</head>
<body>
	<table>
		<tr>
			<th>NAMES</th>
			<th>Passwords</th>
			<th>Delete</th>
			<th>Update</th>


		</tr>
		<?php 
		$connect=mysqli_connect("localhost","root","","LOGIN");
		$fetch= mysqli_query($connect,"select* from USERS"); 
		while ($row=mysqli_fetch_assoc($fetch)) {
			extract($row);

			echo "<tr>
			<td>$UserName</td>
			<td>$Password</td>
			<td><a href='delete.php?id=$id'>delete</a></td>
			<td><a href='updating.php'>Update</a></td>

		</tr>";
	}?>
</table>

</body>
</html>