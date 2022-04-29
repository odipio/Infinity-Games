<?php include 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/results.css">
    <title>Infinity Games | Request</title>
</head>

    <body style="font-family:monospace">
    <?php if (isset($_SESSION["username"])): ?>
        <nav><script src="js/loggedNav.js"></script></nav>
    <?php else: ?>
        <nav><script src="js/nav.js"></script></nav>
    <?php endif ?>
        <h1 style="font-family: monospace">
            Request A Game
        </h1>

        <form method="post" style="font-family: monospace">
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
            <button type="submit" name="req_game">Submit request</button>
        </form>
        <?php if (isset($_SESSION["username"])): ?>
            <?php
                $user = $_SESSION['username'];
                $sql1 = "SELECT * FROM users WHERE username LIKE '%$user%'";
                $results = mysqli_query($db, $sql1);
                $rows = mysqli_fetch_assoc($results);
                if  ($rows['admin'] == 'Yes'):
            ?>
            <h1>Pending Requests</h1>
            <div class="table-wrapper">
            <table class="fl-table">
            <thead>
                <th>Title</th>
                <th>Developer(s)</th>
                <th>Publisher(s)</th>
                <th>Release Year</th>
                <th>Online Multiplayer?</th>
                <th>Accept/Deny Request</th>
            </thead>
            <tbody>
                <?php  
                    $sql = "SELECT * FROM requests ORDER BY name";
                    $result = mysqli_query($db, $sql);
                    $queryResult = mysqli_num_rows($result);
        
                    if($queryResult > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                               <td>".$row['name']."</td>
                               <td>".$row['developer']."</td>
                               <td>".$row['publisher']."</td>
                               <td>".$row['releaseDate']."</td>
                               <td>".$row['multiplayer']."</td>
                               <td><form action='admin.php'><input type='submit' value='Accept'/></form><form action='admin.php'><input type='submit' value='Deny'/></form></td>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div> 
    <?php endif ?>
    <?php endif ?>
    </body>
</html>