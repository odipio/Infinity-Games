<?php 
    include('server.php'); 
    $game = $_GET['game'];
    $sql = "SELECT * FROM games WHERE name LIKE '%$game%'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Infinity Games | <?php echo $row['name']; ?></title>
    <link rel="stylesheet" href="css/design.css">
    <style>
        body { background-color: <?php echo $row['color']; ?> }
    </style>

</head>
<body style="font-family:monospace">

    <!-- Navbar -->
    <?php if (isset($_SESSION["username"])): ?>
        <nav><script src="js/loggedNav.js"></script></nav>
    <?php else: ?>
        <nav><script src="js/nav.js"></script></nav>
    <?php endif ?>

    <div style="position:relative; 
                top: 17px;
                float:left">
        <img src="<?php echo $row['logo'] ?>" alt="Logo"
            width="<?php echo $row['width'] ?>" height="<?php echo $row['height'] ?>" />
    </div>

    <div>
        <h1> |<?php echo $row['name']; ?></h1>
    </div>

    <p><?php echo $row['description']; ?></p>

    <h2><b>Trailer</b></h2>

    <iframe width="300" height="167"
            src="<?php echo $row['trailer'] ?>"
            title="YouTube video player"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
    </iframe><br><br>
        
    <table>
        <tr>
            <td><b>Developer(s)</b></td>
            <td><b>&nbsp;&nbsp;&nbsp;&nbsp;Publisher(s)</b></td>
            <td><b>&nbsp;&nbsp;&nbsp;&nbsp;Release Year</b></td>
        </tr>
        <tr>
            <td><?php echo $row['developer'] ?></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['publisher'] ?></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['releaseDate'] ?></td>
        </tr>
    </table>
    <br>    
    <p>
        <b>Platforms</b><br>
        <?php echo $row['platforms'] ?>
    </p>
    <br>
    <p>
        <b>Reviews</b><br>
            <a href="<?php echo $row['ignLink'] ?>" target="_blank"><img src="images/ign.png" alt="IGN" width="90" height="45"/></a>
        <br>
        <b style="font-size:20px"><?php echo $row['ign'] ?>/10</b>
    </p>
    <a href = "<?php echo $row['social'] ?>"><img src=images/twitter.png width="64" height="64">
</body>
</html>