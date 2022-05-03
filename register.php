<!-- Connection to the database so that the information can be stored -->
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  	<link rel="stylesheet" href="css/style.css">
	<title>Infinity Games | Register</title>  
</head>
<body>
	<!-- This php if statement checks if a user is logged in or logged out
		 and displays a different navbar that has the appropriate functions
		 for the correct type of user 
	-->
<?php if (isset($_SESSION["username"])): ?>
      <nav><script src="js/loggedNav.js"></script></nav>
    <?php else: ?>
      <nav><script src="js/nav.js"></script></nav>
    <?php endif ?>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <!-- This form takes in a username, email, and password in order to create a new account to be stored
	   in the database 
	-->
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
	  <!-- If a user already has an account, they will be able to click sign in in order to perform
		   that function on the website 
	  -->
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>