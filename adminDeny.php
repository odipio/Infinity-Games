<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/design.css">
    <title>Infinity Games | Admin</title>
</head>    
<body style="font-family:monospace">  
    <!-- Navbar -->
    <?php if (isset($_SESSION["username"])): ?>
        <nav><script src="js/loggedNav.js"></script></nav>
    <?php else: ?>
        <nav><script src="js/nav.js"></script></nav>
    <?php endif ?>
    <form method="post" style="font-family: monospace">
            <br>
            <label for="title">Title: </label>
            <input type="text" id="title" name="name"><br><br>
            <button type="submit" name="del_game">Deny request</button>
    </form>
</body>