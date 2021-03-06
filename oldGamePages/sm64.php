<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>
        Infinity Games | Super Mario 64
    </title>
    <link rel="stylesheet" href="css/design.css">
    <style>
        body { background-color: #fed5d5 }
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
            <img src="images/sm64.png" alt="Super Mario 64"
                width="80" height="35" />
        </div>

        <div>
            <h1> |Super Mario 64</h1>
        </div>

        <p>
          Super Mario 64 is a 1996 platform game for the Nintendo 64. 
          Developed by Nintendo Entertainment Analysis and Development and published by Nintendo, it is the first Super Mario game to feature 3D gameplay.
          As Mario, the player collects Power Stars to unlock enough of Princess Peach's castle to get to Bowser and rescue Princess Peach.
        </p><br>

        <p>
            <b>Trailer</b><br>
        </p>

        <iframe width="300" height="167"
                src="https://www.youtube.com/embed/8Fk5sRwbEWI"
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
                    <td>Nintendo EAD</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Nintendo</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;1996</td>
                </tr>
        </table>
        <br><br>

        <p>
            <b>Platforms</b><br>
            Nintendo 64, iQue Player
        </p>
        <br><br>

        <p>
            <b>Reviews</b><br>
            <a href="https://www.ign.com/articles/1996/09/26/super-mario-64" target="_blank">
                <img src="images/ign.png" alt="IGN" width="90" height="45"/>
            </a>
            <br><b style="font-size:20px">9.8/10</b>
        </p>
    </body>
</html>
