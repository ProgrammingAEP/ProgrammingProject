<?php
	session_start();

	$db = mysqli_connect("localhost", "root", "ybk2588098","accounts");
	if (isset($_POST['register_btn'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$password2 = mysqli_real_escape_string($db, $_POST['password2']);
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		//TODO:Insert date of birth and gender.
		if ($password == $password2) {
			//create user
			$password = md5($password); // hash password before storing for security purposes
			$sql = "INSERT INTO members(fname, lname,username, email, password) VALUES('$fname', '$lname', '$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			header('Location: home.php');
		}else{
			$_SESSION['message'] = "The two passwords do not match!";
		}
//TODO: Run this

	}
?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css">
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<body>
			<h2>Signup Form for Match Making</h2>
			<form method = "post" action = "register.php">
			<table>
				<tr>
					<td>First Name: </td>
					<td><input type="text" name="fname" placeholder ="Please enter your First Name"></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input type="text" name="lname" placeholder ="Please enter your Last Name"></td>
				</tr>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="username" placeholder ="Please enter your Username"></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="email" placeholder="Please enter your E-mail address"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="text" name="password" placeholder="Please enter your password!"></td>
				</tr>
				<tr>
					<td>Confirm Password: </td>
					<td><input type="text" name="password2" placeholder="Please confirm your password!"></td>
				</tr>
			</table>
			<input type ="submit" name ="register_btn" value ="register">
			</form>

		</body>
	</head>
</html>
