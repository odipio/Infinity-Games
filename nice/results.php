<?php include 'server.php'; ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/results.css" />
    <title>Infinity Games | Browse</title>
</head>
<body style = "font-family:monospace">
    <?php if (isset($_SESSION["username"])): ?>
        <nav><script src="js/loggedNav.js"></script></nav>
    <?php else: ?>
        <nav><script src="js/nav.js"></script></nav>
    <?php endif ?>

<h1 style="font-family: monospace">Results</h1>

<div class="table-wrapper">
    <table class="fl-table">
        <thead>
            <th>Title</th>
            <th>Developer(s)</th>
            <th>Publisher(s)</th>
            <th>Release Year</th>
            <th>Online Multiplayer?</th>
        </thead>
        <tbody>
        
        <?php
            if(isset($_POST['submit-search'])) {
                $search = mysqli_real_escape_string($db, $_POST['search']);
                $sql = "SELECT * FROM games WHERE name LIKE '%$search%' OR
                developer LIKE '%$search%' OR
                publisher LIKE '%$search%' OR
                releaseDate LIKE '%$search%' OR
                multiplayer LIKE '%$search%' ORDER BY name";
                $result = mysqli_query($db, $sql);
                $queryResult = mysqli_num_rows($result);
            
                if($queryResult > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td><a href='game.php?game=".$row['name']."'>".$row['name']."</td>
                                <td>".$row['developer']."</td>
                                <td>".$row['publisher']."</td>
                                <td>".$row['releaseDate']."</td>
                                <td>".$row['multiplayer']."</td>";
                    }
                }
                else {
                    echo "No results";
                }
            }
            else {
                $sql = "SELECT * FROM games ORDER BY name";
                $result = mysqli_query($db, $sql);
                $queryResult = mysqli_num_rows($result);
            
                if($queryResult > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td><a href='game.php?game=".$row['name']."'>".$row['name']."</td>
                                <td>".$row['developer']."</td>
                                <td>".$row['publisher']."</td>
                                <td>".$row['releaseDate']."</td>
                                <td>".$row['multiplayer']."</td>";
                    }
                }
                else {
                    echo "No results";
                }
            }
            
        ?>
        <tbody>
    </table>
</div>
</body>
</html>

