<!-- Connects to the database so that this information can be stored -->
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  	<link rel="stylesheet" href="css/style.css">
	<title>Infinity Games | Login</title>  
</head>
<body>
	<!-- The nav bar uses the javascript file nav.js  -->
<nav><script src="js/nav.js"></script></nav>

<div class="header"><h2>Login</h2></div>

<!-- This form reads the input of the username and password and then compares that information with
	 what is stored in the database 
-->
<form method="post" action="login.php">
	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
	  <!-- If the user is not a member, they can click on this link and be taken to register.php
		   to register a new account -->
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
</form>
</body>
</html>