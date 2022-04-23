<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>
        Infinity Games | Rocket League
    </title>
    <link rel="stylesheet" href="css/design.css">
    <style>
        body { background-color: #88b2bd }
    </style>
</head>
<!--<body style="font-family:monospace; background-image: url(images/rocketleague.jpg);">-->
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
        <img src="images/rlLogo.png" alt="Rocket League"
             width="90" height="32" />
    </div>
    <div style="position:relative; 
                right:-60px; 
                float:right">
    </div>
    
    <div>
        <h1> |Rocket League</h1>
    </div>

    <p>
        Welcome to the high-powered hybrid of arcade-style soccer and vehicular mayhem! Customize your car, hit the field, and compete in one of the most critically acclaimed sports games of all time!
        Rocket League is a fantastical sport-based video game, developed by Psyonix. Rocket League is essentially soccer with cars. It features a competitive game mode based on teamwork and outmaneuvering opponents. Players work with their team to advance the ball down the field, and score goals in their opponents' net.
    </p><br>

    <p>
        <b>Trailer</b><br>
    </p>
    <iframe width="300" height="167"
        src="https://www.youtube.com/embed/OmMF9EDbmQQ"
        title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe><br>

    <p>
        <table>
            <tr>
              <td><b>Developer(s)</b></td>
              <td><b>&nbsp;&nbsp;&nbsp;&nbsp;Publisher(s)</b></td>
              <td><b>&nbsp;&nbsp;&nbsp;&nbsp;Release Year</b></td>
            </tr>
            <tr>
              <td>Psyonix</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;Psyonix</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;2015</td>
            </tr>
          </table>
    </p><br>

    <p>
        <b>Platforms</b><br>
        PC, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S, Nintendo Switch
    </p><br>

    <p>
        <b>Reviews</b><br>
        <a href="https://www.ign.com/articles/2017/12/06/rocket-league-review" target="_blank">
            <img src="images/ign.png" alt="IGN" width="90" height="45"/>
        </a>
        <br><b style="font-size:20px">9.3/10</b>
    </p>
</body>
</html>
