<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database

//$db = mysqli_connect('infinity-games-scsdc-server.mysql.database.azure.com', 'jrtemnvxdx', 'OXTSC6KX3D575567$', 'project');
$db = mysqli_init(); 
mysqli_ssl_set($db, NULL,NULL, "certificates/DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
mysqli_real_connect($db, "infinity-games-scsdc-server.mysql.database.azure.com", "jrtemnvxdx", "OXTSC6KX3D575567$", "project", 3306, MYSQLI_CLIENT_SSL);
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header('location: index.php');
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
// initializing variables
$name = "";
$developer = "";
$publisher = "";
$releaseDate = "";
$platforms = "";
$multiplayer = "";

// REGISTER GAME
if (isset($_POST['req_game'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $developer = mysqli_real_escape_string($db, $_POST['developer']);
  $publisher = mysqli_real_escape_string($db, $_POST['publisher']);
  $releaseDate = mysqli_real_escape_string($db, $_POST['releaseDate']);
  $platforms = mysqli_real_escape_string($db, $_POST['platforms']);
  $multiplayer = mysqli_real_escape_string($db, $_POST['multiplayer']);

  // form validation: ensure that the form is correctly filled
  if (empty($name)) { array_push($errors, "Title is required"); }
  if (empty($developer)) { array_push($errors, "Developer is required"); }
  if (empty($publisher)) { array_push($errors, "Publisher is required"); }
  if (empty($releaseDate)) { array_push($errors, "Release Year is required"); }
  if (empty($platforms)) { array_push($errors, "Platforms is required"); }
  if (empty($multiplayer)) { array_push($errors, "Multiplayer (Yes/No) is required"); }
  
    $query1 = "INSERT INTO requests (name, developer, publisher, releaseDate, platforms, multiplayer) 
  			  VALUES('$name', '$developer', '$publisher', '$releaseDate', '$platforms', '$multiplayer')";
  	mysqli_query($db, $query1);
  	header('location: index.php');
}

if (isset($_POST['deny_game'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $query3 = "DELETE FROM requests WHERE name = '$name'";
}

if (isset($_POST['add_game'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $developer = mysqli_real_escape_string($db, $_POST['developer']);
  $publisher = mysqli_real_escape_string($db, $_POST['publisher']);
  $releaseDate = mysqli_real_escape_string($db, $_POST['releaseDate']);
  $platforms = mysqli_real_escape_string($db, $_POST['platforms']);
  $multiplayer = mysqli_real_escape_string($db, $_POST['multiplayer']);
  $logo = mysqli_real_escape_string($db, $_POST['logo']);
  $trailer = mysqli_real_escape_string($db, $_POST['trailer']);
  $ign = mysqli_real_escape_string($db, $_POST['ign']);
  $width = mysqli_real_escape_string($db, $_POST['width']);
  $height = mysqli_real_escape_string($db, $_POST['height']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $ignLink = mysqli_real_escape_string($db, $_POST['ignLink']);
  $color = mysqli_real_escape_string($db, $_POST['color']);

  // form validation: ensure that the form is correctly filled
  if (empty($name)) { array_push($errors, "Title is required"); }
  if (empty($developer)) { array_push($errors, "Developer is required"); }
  if (empty($publisher)) { array_push($errors, "Publisher is required"); }
  if (empty($releaseDate)) { array_push($errors, "Release Year is required"); }
  if (empty($platforms)) { array_push($errors, "Platforms is required"); }
  if (empty($multiplayer)) { array_push($errors, "Multiplayer (Yes/No) is required"); }
  if (empty($logo)) { array_push($errors, "Link to logo is required"); }
  if (empty($trailer)) { array_push($errors, "Link to trailer is required"); }
  if (empty($ign)) { array_push($errors, "IGN rating is required"); }
  if (empty($width)) { array_push($errors, "Logo width is required"); }
  if (empty($height)) { array_push($errors, "Logo height is required"); }
  if (empty($description)) { array_push($errors, "Game description is required"); }
  if (empty($ignLink)) { array_push($errors, "Link to IGN page is required"); }
  if (empty($color)) { array_push($errors, "Background color (hex code) is required"); }
  
    $query1 = "INSERT INTO games (name, developer, logo, publisher, releaseDate, platforms, 
    trailer, multiplayer, ign, width, height, description, ignLink, color) 
  			  VALUES('$name', '$developer', '$logo', '$publisher', '$releaseDate', '$platforms', 
          '$trailer', '$multiplayer', '$ign', '$width', '$height', '$description', '$ignLink', '$color')";
  	$query2 = "DELETE FROM requests WHERE name LIKE '$name'";
    mysqli_query($db, $query1);
    mysqli_query($db, $query2);
  	header('location: index.php');
}

if (isset($_POST['del_game'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);

  // form validation: ensure that the form is correctly filled
  if (empty($name)) { array_push($errors, "Title is required"); }
  	$query4 = "DELETE FROM requests WHERE name LIKE '$name'";
    mysqli_query($db, $query4);
  	header('location: index.php');
}
?>