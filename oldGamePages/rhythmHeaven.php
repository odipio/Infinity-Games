<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>
        Infinity Games | Rhythm Heaven
    </title>
    <link rel="stylesheet" href="css/design.css">
    <style>
        body { background-color: #fcf682 }
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
            <img src="images/rh.png" alt="Rhythm Heaven"
                width="50" height="45" />
        </div>

        <div>
            <h1> |Rhythm Heaven</h1>
        </div>

        <p>
            Rhythm Heaven is played using the touch screen with the DS held vertically, similarly to a book. Throughout
             the game, players use the stylus to play through several rhythm-based levels known as Rhythm Games, each with
              their own specific rules. Controls used include tapping the touch screen, holding the stylus down on the
               touch screen, dragging it across the screen and flicking it off the screen. The game's fifty Rhythm Games
                are split into ten sets, each consisting of four Rhythm Games and a themed Remix level that incorporates
                 the previous games (or more) into one song. In each Rhythm Game, the player must attempt to keep with the
                  rhythm throughout the level, receiving a rank at the end of the game depending on how well they did.
        </p><br>

        <p>
            <b>Trailer</b><br>
        </p>

        <iframe width="300" height="167"
                src="https://www.youtube.com/embed/zmg3GmHgpYw"
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
                    <td>Nintendo SPD</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Nintendo</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;2008</td>
                </tr>
        </table>
        <br><br>

        <p>
            <b>Platforms</b><br>
            Nintendo DS
        </p>
        <br>

        <p>
            <b>Reviews</b><br>
            <a href="https://www.ign.com/articles/2009/03/31/rhythm-heaven-review" target="_blank">
                <img src="images/ign.png" alt="IGN" width="90" height="45"/>
            </a>
            <br><b style="font-size:20px">9/10</b>
        </p>
    </body>
</html>