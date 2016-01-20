<?php
/**
* Displays a list of all showings that are in the database
*/
   $query = "select * from showing, movie where showing.mid = movie.mid";
   $result = mysqli_query($connection, $query);
   if (!$result) {
       die("databases query failed.");
   }
   while ($row = mysqli_fetch_assoc($result)) {
       echo '<input type="radio" name="getShowing" value="';
       echo $row["sid"];
       echo '">'.$row["sid"].
       " ".$row["date"].
       " ".$row["time"].
       " ".$row["movie_name"].
       "<br>";
   }

   mysqli_free_result($result);
?>