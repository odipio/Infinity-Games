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
    <?php  
        $sql = "SELECT * FROM requests ORDER BY name";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row['name'];
    ?> 
    <form method="post" style="font-family: monospace">
            <label for="title">Title: </label>
            <input type="text" id="title" name="name" value=<?php echo $row['name'] ?>><br><br>
            <label for="developer">Developer: </label>
            <input type="text" id="developer" name="developer" value=<?php echo $row['developer'] ?>><br><br>
            <label for="publisher">Publisher: </label>
            <input type="text" id="publisher" name="publisher" value=<?php echo $row['publisher'] ?>><br><br>
            <label for="year">Release Year: </label>
            <input type="text" id="releaseDate" name="releaseDate" value=<?php echo $row['releaseDate'] ?>><br><br>
            <label for="platforms">Platforms: </label>
            <input type="text" id="platforms" name="platforms" value=<?php echo $row['platforms'] ?>><br><br>
            <label for="multiplayer">Multiplayer (Yes/No): </label>
            <input type="text" id="multiplayer" name="multiplayer" value=<?php echo $row['multiplayer'] ?>><br><br>
            <button type="submit" name="req_game">Submit request</button>
    </form>
</body>