<html>
	<header>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <body>
			<form action = "profile.php" method="POST">
				<div class="login">
												<h1>Splendr</h1>
                    <div class="user"><span><input type="text" name ="username" placeholder="Username" id="uname" required/></span></div>
                    <div class="pws"><span><input type="password" name="password" placeholder="Password" id="pword" required/></span></div>
                    <div class="logbutton"><span><button type ="submit" name ="login_btn">Log In</button></span></div>
                    <div class= "remember"><input type="checkbox"><a style="font-size: 16px;"> Remember me </a>
                    <a href="#" class="forgot">Forgot password?</a></div>
                </div>
            </form>
		</body>
	</header>

</html>
