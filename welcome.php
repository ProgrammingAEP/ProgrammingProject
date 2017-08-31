<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<head>
	<title>Registration Completed</title>
</head>
<body>
<h1>Your registration is now complete</h1>
Welcome
<?php echo $_SESSION['fname']; ?>&nbsp;
<?php echo $_SESSION['lname']; ?><br>
 to the house of Stark
</body>
</html>
