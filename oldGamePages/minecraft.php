﻿<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>
        Infinity Games | Minecraft
    </title>
    <link rel="stylesheet" href="css/design.css">
    <style>
        body { background-color: #889e89 }
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
        <img src="images/grass2.png" alt="Minecraft"
             width="32" height="32" />
    </div>
    <div style="position:relative; 
                right:-60px; 
                float:right">
    </div>
    
    <div>
        <h1> |Minecraft</h1>
    </div>

    <p>
        Minecraft is a sandbox style video game with seemingly endless possibilities. From planting crops and creating a farm
        to fighting the dragon in the End Dimension, you will never run out of things to do.
    </p><br>

    <p>
        <b>Trailer</b><br>
    </p>

    <iframe width="300" height="167"
        src="https://www.youtube.com/embed/MmB9b5njVbA"
        title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe><br>

    <p>
     <!-- <table>
            <tr>
              <td><b>Developer(s)</b></td>
              <td><b>Publisher(s)</b></td>
              <td><b>Release Year</b></td>
            </tr>
            <tr>
              <td>Mojang Studios</td>
              <td>Mojang Studios, Sony Interactive Entertainment, Xbox Game Studios</td>
              <td>2011</td>
            </tr>
          </table> -->
        <table>
            <tr>
                <td><b>Developer(s)</b></td>
                <td><b>&nbsp;&nbsp;&nbsp;&nbsp;Publisher(s)</b></td>
                <td><b>&nbsp;&nbsp;&nbsp;&nbsp;Release Year</b></td>
            </tr>
            <tr>
                <td>Mojang Studios</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;Mojang Studios, Sony Interactive Entertainment, Xbox Game Studios</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;2011</td>
            </tr>
         </table>
    </p><br>

    <p>
        <b>Platforms</b><br>
        Java, Windows 10, Mobile, PlayStation 3, PlayStation 4, Playstation Vita, Xbox 360, Xbox One, Wii U, Nintendo Switch
    </p><br>

    <p>
        <b>Reviews</b><br>
        <a href="https://www.ign.com/articles/2011/11/24/minecraft-review" target="_blank">
            <img src="images/ign.png" alt="IGN" width="90" height="45"/>
        </a>
        <br><b style="font-size:20px">9/10</b>
    </p>

</body>
</html>
