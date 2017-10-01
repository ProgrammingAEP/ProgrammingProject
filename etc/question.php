<?php
	session_start();
  $server = "localhost";
  $id = "root";
  $password = "ybk2588098";
  $tablename = "accounts";

	$db = mysqli_connect($server, $id, $password, $tablename);
	if (isset($_POST['submit_btn'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
    $movie = mysqli_real_escape_string ($db, $_POST['movie']);

		//TODO:Insert date of birth and gender.
		//TODO: Insert password strength bar that indicates how strong or weak the password is
		//TODO: Insert regex pattern that asks for compulsory pfassword combination of upper, lower case alphabet as well as number and password length of 10+
			//create user
			$password = md5($password); // hash password before storing for security purposes
			$sql = "INSERT INTO interst(movie, music, hobby) VALUES('$movie', '$music'. '$hobby')";
			mysqli_query($db, $sql);
			$_SESSION['movie'] = $movie;
			$_SESSION['music'] = $music;
			$_SESSION['hobby'] = $hobby;
			header('Location: welcome.php');
//TODO: Run this

	}
?>
<!DOCTYPE html>
<link rel ="stylesheet" type="text/css" href ="style.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
	body{
		background-color: white;
		text-align: center;
		font-family: 'Lobster', cursive;
		color: black;
		margin: auto;
	}
</style>
<html>
	<head>
		<body>
			<section class="intro5">
				<div class ="inner5">
					<div class="content5">
						<h1 style ="font-size: 300%; color:#D5AC0D;">Register Now!</h1>
						<form method = "post" action = "aztest.php">
              <input type="text" name="movie" class ="inputText"><br>
              <input type="text" name="music" class ="inputText"><br>
              <input type="text" name="hobby" class ="inputText"><br>
						<input type ="submit" class ="submit" name ="submit_btn" value ="register">
						</form>

					</div>
				</div>
			</section>
		</body>
	</head>
</html>
