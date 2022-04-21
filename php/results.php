<?php 
   include 'search.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Results</title>
    <link rel="stylesheet" href="results.css" />
</head>
<body style = "font-family:monospace">
<nav><script src="nav.js"></script></nav>

<h1 style="font-family: monospace">Results</h1>
<!--In progress sorting buttons, to sort by Developer, Publisher,
or Release Year-->
<div class="dropdown">
  <button class="dropbtn">Sort by</button>
  <div class="dropdown-content">
    <button type="submit" name="sortsearch">Title</button>
    <button>Developer</button>
    <button>Publisher</button>
    <button>Release Year</button>
  </div>
</div>
<!--Creating a table to display search results-->
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
            <th>Title</th>
            <th>Developer(s)</th>
            <th>Publisher(s)</th>
            <th>Release Year</th>
        </thead>
        <tbody>
        <!--PHP code to post the search results to a MySQL query, and 
        return SELECT * FROM games where name/developer/publisher/release
        is LIKE the search query-->
        <?php
            //If there is a search, display the results
            if(isset($_POST['submit-search'])) {
                $search = mysqli_real_escape_string($db, $_POST['search']);
                $sql = "SELECT * FROM games WHERE name LIKE '%$search%' OR
                developer LIKE '%$search%' OR
                publisher LIKE '%$search%' OR
                releaseDate LIKE '%$search%'ORDER BY name";
                $result = mysqli_query($db, $sql);
                $queryResult = mysqli_num_rows($result);
            
                if($queryResult > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td><a href=".$row['link'].">".$row['name']."</td>
                                <td>".$row['developer']."</td>
                                <td>".$row['publisher']."</td>
                                <td>".$row['releaseDate']."</td>";
                    }
                }
                else {
                    echo "No results";
                }
            }
            //If no search, display all games ordered by name
            else {
                $sql = "SELECT * FROM games ORDER BY name";
                $result = mysqli_query($db, $sql);
                $queryResult = mysqli_num_rows($result);
            
                if($queryResult > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td><a href=".$row['link'].">".$row['name']."</td>
                                <td>".$row['developer']."</td>
                                <td>".$row['publisher']."</td>
                                <td>".$row['releaseDate']."</td>";
                    }
                }
                else {
                    echo "No results";
                }
            }
            
        ?>
        <tbody>
    </table>
</div>
</body>
</html>

