<!DOCTYPE html>
<?php session_start(); ?>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/arnoldstyle.css">
    <meta charset="utf-8">
    <style>
    html{
      font-family: 'Quicksand', sans-serif;
      background-color: #E9EBEE;
    }
    body{
      text-align: center;
    }
    nav{
      width: 100%;
      background-color: #FF3a44;
      color: white;
      height: auto;
      font-family: 'Roboto', sans-serif;
    }
    nav li{
      display: inline-block;
    }
    nav a{
        padding:25px 25px 25px 25px;
        display: block;
        text-decoration: none;
        color: white;
    }

    </style>
    <title>
    </title>
  </head>
  <body>
    <button type="button" name="logout"><a href="../Login/logout.php">Logout</a></button>
    <button type="button" name="home"><a href="../index.php">Home</a></button>
    <h1 style ="color:#FF3A44; font-family:'lobster', cursive;">PROFILE</h1>
    <section class = "container1">
      <div align="center" class="middle1">
        <img class ="person" src="../img/human.jpg"><br>
        <p><?php echo  $_SESSION["fname"]." ".$_SESSION["lname"]."        |        "; ?> <?php echo $_SESSION["doby"]."/".$_SESSION["dobm"]."/".$_SESSION["dobd"]." | "; ?><?php echo $_SESSION["state"]." | ".$_SESSION["city"]; ?></p>
        <br>
      </div>
    </section>
    <div class="middleempty">
    </div>
    <section class="container2">
      <div class="middle2">
        <p><b>GENERAL INFORMATION</b></p>
       <p><b>Occupation:</b> Student</p>
       <p><b>Age:</b> 21</p>
       <p><b>Relationship:</b> Single</p>
       <p><b>Ethinicity:</b> Asian</p>
      </div>
      <div class= "right">
        <p><b>ABOUT ME</b></p>
        <p>I rike springroll</p>
      </div>
    </section>
  </body>
</html>
