<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/design.css">
    <style>
        body { background-color: #82c8d1 }
    </style>
    <title>Infinity Games | Deny</title>
</head>    
<body style="font-family:monospace">  

    <!-- Display the navbar with logout button if a user is logged in, display navbar with login button if no user is logged in -->
    <?php if (isset($_SESSION["username"])): ?>
        <nav><script src="js/loggedNav.js"></script></nav>
    <?php else: ?>
        <nav><script src="js/nav.js"></script></nav>
    <?php endif ?>

    <!-- Form an admin can use to specify which request to deny -->
    <form method="post" style="font-family: monospace">
            <br>
            <label for="title">Title: </label>
            <input type="text" id="title" name="name"><br><br>
            <button type="submit" name="del_game">Deny request</button>
    </form>
</body>