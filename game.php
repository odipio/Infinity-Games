<!-- Retrieves the correct game from the game table -->
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

    <!-- Background color echoed from the color field of the game -->
    <style>
        body { background-color: <?php echo $row['color']; ?> }
    </style>

</head>
<body style="font-family:monospace">

    <!-- Display the navbar with logout button if a user is logged in, display navbar with login button if no user is logged in -->
    <?php if (isset($_SESSION["username"])): ?>
        <nav><script src="js/loggedNav.js"></script></nav>
    <?php else: ?>
        <nav><script src="js/nav.js"></script></nav>
    <?php endif ?>

    <!-- Display the logo with the specified width and height -->
    <div style="position:relative; 
                top: 17px;
                float:left">
        <img src="<?php echo $row['logo'] ?>" alt="Logo"
            width="<?php echo $row['width'] ?>" height="<?php echo $row['height'] ?>" />
    </div>

    <!-- Displays the title of the game next to the logo -->
    <div>
        <h1> |<?php echo $row['name']; ?></h1>
    </div>

    <!-- Display the description -->
    <p><?php echo $row['description']; ?></p>

    <h2><b>Trailer</b></h2>

    <!-- Embed the trailer -->
    <iframe width="300" height="167"
            src="<?php echo $row['trailer'] ?>"
            title="YouTube video player"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
    </iframe><br><br>
    
    <!-- Display the developer, publisher, and release year for the game -->
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

    <!-- Display the platforms -->
    <p>
        <b>Platforms</b><br>
        <?php echo $row['platforms'] ?>
    </p>
    <br>

    <!-- Make the IGN logo link to the correct IGN page -->
    <p>
        <b>Reviews</b><br>
            <a href="<?php echo $row['ignLink'] ?>" target="_blank"><img src="images/ign.png" alt="IGN" width="90" height="45"/></a>
        <br>
        <b style="font-size:20px"><?php echo $row['ign'] ?>/10</b>
    </p>

    <!-- Make the Twitter logo link to the correct Twitter page -->
    <a href = "<?php echo $row['social'] ?>"><img src=images/twitter.png width="64" height="64">
</body>
</html>