<?php
/**
* Lists the total number of sales for a specified genre of movie
*/
   include 'connectdb.php';
   echo "<h1> Total Sales: </h1>";
   echo"<br>";
   $genre = $_POST["genres"];
   $query = "select count(cid) as sales from movie,genre, watches,showing where 
   genre_type = '$genre' and movie.mid = genre.mid and movie.mid = showing.mid and showing.sid = watches.sid";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo $row["sales"]."<br>";	
   }
   mysqli_free_result($result);
?>