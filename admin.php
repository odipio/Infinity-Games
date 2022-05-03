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
    <title>Infinity Games | Accept</title>
</head>    
<body style="font-family:monospace">  

    <!-- Display the navbar with logout button if a user is logged in, display navbar with login button if no user is logged in -->
    <?php if (isset($_SESSION["username"])): ?>
        <nav><script src="js/loggedNav.js"></script></nav>
    <?php else: ?>
        <nav><script src="js/nav.js"></script></nav>
    <?php endif ?>

    <!-- Displays all outstanding requests from the requests table -->
    <?php  
        $sql = "SELECT * FROM requests ORDER BY name";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
    ?> 

    <!-- Form that the admin uses to enter all critical game information that will be displayed on the game page -->
    <form method="post" style="font-family: monospace">
            <br>
            <!-- Request form fields -->
            <label for="title">Title: </label>
            <input type="text" id="title" name="name"><br><br>
            <label for="developer">Developer: </label>
            <input type="text" id="developer" name="developer"><br><br>
            <label for="publisher">Publisher: </label>
            <input type="text" id="publisher" name="publisher"><br><br>
            <label for="year">Release Year: </label>
            <input type="text" id="releaseDate" name="releaseDate"><br><br>
            <label for="platforms">Platforms: </label>
            <input type="text" id="platforms" name="platforms"><br><br>
            <label for="multiplayer">Multiplayer (Yes/No): </label>
            <input type="text" id="multiplayer" name="multiplayer"><br><br>
            
            <!-- Description -->
            <label for="description">Game description: </label>
            <input type="text" id="description" name="description"><br><br>

            <!-- Logo information -->
            <label for="logo">Link to logo: </label>
            <input type="text" id="logo" name="logo"><br><br>
            <label for="width">Logo width (px): </label>
            <input type="text" id="width" name="width"><br><br>
            <label for="height">Logo height (px): </label>
            <input type="text" id="height" name="height"><br><br>

            <!-- Trailer --> 
            <label for="trailer">Link to trailer (embedded): </label>
            <input type="text" id="trailer" name="trailer"><br><br>

            <!-- Reviews information -->
            <label for="ignLink">Link to IGN review page: </label>
            <input type="text" id="ignLink" name="ignLink"><br><br>
            <label for="ign">IGN rating (x/10): </label>
            <input type="text" id="ign" name="ign"><br><br>
            
            <!-- Developer Twitter -->
            <label for="social">Link to developer Twitter: </label>
            <input type="text" id="social" name="social"><br><br>

            <!-- Background color -->
            <label for="color">Background color (hex code): </label>
            <input type="text" id="color" name="color"><br><br>

            <!-- Submit button -->
            <button type="submit" name="add_game">Submit game</button>
    </form>
</body>