<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>
        Infinity Games | Halo: Reach
    </title>
    <link rel="stylesheet" href="css/design.css">
    <style>
        body { background-color: #5e7070 }
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
            <img src="images/reach.png" alt="Halo: Reach"
                width="90" height="30" />
        </div>

        <div>
            <h1> |Halo: Reach</h1>
        </div>

        <p>
            This first person shooter is the fifth installment in the Halo series and a direct prequel to Halo: Combat 
            Evolved. In the game's campaign, which can be played alone or cooperatively, players assume the role of Noble 
            Six, a supersoldier engaged in combat with the alien collective known as the Covenant. The campaign's encounters 
            with enemies are typically large, open spaces with weapons caches, cover from enemy fire and strategic vantage points.
        </p><br>

        <p>
            <b>Trailer</b><br>
        </p>

        <iframe width="300" height="167"
                src="https://www.youtube.com/embed/kco1sYXGwYE"
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
                    <td>Bungie</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Microsoft Game Studios</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;2010</td>
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
            <a href="https://www.ign.com/articles/2010/09/12/halo-reach-review" target="_blank">
                <img src="images/ign.png" alt="IGN" width="90" height="45"/>
            </a>
            <br><b style="font-size:20px">9.5/10</b>
        </p>
    </body>
</html>
