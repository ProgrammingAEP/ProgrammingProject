<?php
session_start();
$db = mysqli_connect("localhost", "root", "ybk2588098", "accounts" );
$login = 'SELECT * FROM members';
//$query = mysqli_query($db, $sql);
$loginquery= mysqli_query($db, $login);
$username = $_POST['username'];
$pwrd = $_POST['password'];


$sql = "SELECT * FROM members WHERE username ='$username'AND password='$pwrd'";
$result = $db->query($sql);
if (!$row = mysqli_fetch_assoc($result)) {
  header("Location:login.php");
  echo "not working";
}else{
  $_SESSION["id"] = $row["username"];
  $_SESSION["fname"] =$row["fname"];
  $_SESSION["lname"] =$row["lname"];
  $_SESSION["doby"] = $row["doby"];
  $_SESSION["dobm"] = $row["dobm"];
  $_SESSION["dobd"] = $row["dobd"];
  $_SESSION["state"] = $row["state"];
  $_SESSION["city"] = $row["city"];

  header("Location:profilepage.php");
}
?>
