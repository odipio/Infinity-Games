<?php 
   include 'search.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Title</title>
</head>
<body>
<form action="results.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search"></button>
</form>

<h1>Hello World</h1>

<div class="article-container">
    <?php
        $sql = "SELECT * FROM games";
        $result= mysqli_query($db, $sql);
        $query_results = mysqli_num_rows($result);

        if($query_results > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div>
                    <h3>".$row['name']."</h3>
                    <p>".$row['developer']."</p>
                </div>";
            }
        }
    ?>
    </div>
</body>
</html>