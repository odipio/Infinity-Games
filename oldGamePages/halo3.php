<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>
        Infinity Games | Halo 3
    </title>
    <link rel="stylesheet" href="css/design.css">
    <style>
        body { background-color: #9CC2C0 }
    </style>
</head>
    <body style="font-family:monospace">
        
        <!-- Navbar -->
        <?php if (isset($_SESSION["username"])): ?>
      <nav><script src="loggedNav.js"></script></nav>
    <?php else: ?>
      <nav><script src="nav.js"></script></nav>
    <?php endif ?>

        <div style="position:relative; 
                    top: 17px;
                    float:left">
            <img src="images/halo3.png" alt="Halo 3"
                width="65" height="35" />
        </div>

        <div>
            <h1> |Halo 3</h1>
        </div>

        <p>
            Halo 3 is a 2007 first-person shooter video game developed by Bungie for the Xbox 360 console. It is the third installment in the Halo franchise. 
            Halo 3's story centers on the interstellar war between twenty-sixth century humanity, a collection of alien races known as the Covenant, and the alien parasite Flood.
        </p><br>

        <p>
            <b>Trailer</b><br>
        </p>

        <iframe width="300" height="167"
                src="https://www.youtube.com/embed/GKDkKKt9Y7I"
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
                    <td>Bungie Inc, 343 Industries, Rockstar Dundee, Saber Interactive</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Microsoft, Xbox Game Studios</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;2007</td>
                </tr>
        </table>
        <br>

        <p>
            <b>Platforms</b><br>
            Xbox 360, Xbox One, Xbox Series X/S, Microsoft Windows
        </p>
        <br>

        <p>
            <b>Reviews</b><br>
            <a href="https://www.ign.com/articles/2007/09/23/halo-3-review" target="_blank">
                <img src="images/ign.png" alt="IGN" width="90" height="45"/>
            </a>
            <br><b style="font-size:20px">9.5/10</b>
        </p>
    </body>
</html>
