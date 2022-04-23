<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/design.css" />
    <title>Infinity Games | Home</title>
  </head>

  <body style="font-family: monospace">

    <?php if (isset($_SESSION["username"])): ?>
      <nav><script src="js/loggedNav.js"></script></nav>
    <?php else: ?>
      <nav><script src="js/nav.js"></script></nav>
    <?php endif ?>
    

    <h1 style="font-family: monospace">Infinity Games</h1>

    <p style="font-family: monospace">
      Welcome to Infinity Games! Here is where you can find information about
      any game out there, watch trailers, and much more.
    </p>

    <p style="font-family: monospace">
      If a game has been released and is not found in the search results, please
      feel free to submit a request using the 'Request A Game' button above.
      Enjoy your stay!
    </p>
    <br />

    <h2>Gaming News</h2>
    <div class="gallery">
        <a target="_blank" href="https://www.minecraft.net/en-us/article/minecraft-1-18-pre-release-2">
          <img src="images/mc118.jpg" alt="Minecraft News" width="500" height="300" />
        </a>
        <div class="desc">Minecraft 1.18 Pre-Release 5</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="https://www.rockstargames.com/newswire/article/ak748a241k42kk/introducing-gta-for-gta-online">
          <img src="images/gta+.jpg" alt="Rockstar News" width="500" height="300" />
        </a>
        <div class="desc">GTA+ for GTA Online</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="https://www.pcgamer.com/e3-2022-cancelled/">
          <img src="images/e3news.jpg" alt="E3 News" width="500" height="300" />
        </a>
        <div class="desc">E3 2022 is cancelled</div>
      </div>
    
      <div class="gallery">
        <a target="_blank" href="https://ign.com/articles/halo-infinite-season-2-lone-wolves-maps-modes-events">
          <img src="images/halonews.jpg" alt="Halo News" width="500" height="300" />
        </a>
        <div class="desc">Halo Infinite Season 2 Will Add New Maps, Modes, And Events Next Month</div>
      </div>
    
      <div class="gallery">
        <a target="_blank" href="https://www.techradar.com/news/the-witcher-4-devs-reveal-why-they-chose-unreal-engine-5">
          <img src="images/witchernews.jpg" alt="Witcher News" width="500" height="300" />
        </a>
        <div class="desc">The Witcher 4 devs reveal why they chose Unreal Engine 5</div>
      </div>
    
      <div class="gallery">
        <a target="_blank" href="https://www.gamespot.com/articles/zelda-breath-of-the-wild-2-release-delayed-to-spring-2023/1100-6501978/">
          <img src="images/zeldanews.jpg" alt="Zelda News" width="500" height="300" />
        </a>
        <div class="desc">Zelda: Breath Of The Wild 2 Release Delayed To Spring 2023</div>
      </div>
    
      <div class="gallery">
        <a target="_blank" href="https://www.theverge.com/2022/3/12/22974056/nintendo-switch-top-selling-console-february-2022">
          <img src="images/switchnews.jpg" alt="Switch News" width="500" height="300" />
        </a>
        <div class="desc">The Nintendo Switch topped console sales once again in February</div>
      </div>
  </body>
</html>
