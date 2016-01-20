<?php
/**
* Displays a list of all movies in the database and allows the user to select as many as they want
* for various operations
*/
   $query = "select * from movie";
   $result = mysqli_query($connection, $query);
   if (!$result) {
       die("databases query failed.");
   }
   while ($row = mysqli_fetch_assoc($result)) {
       echo '<input type="checkbox" name="movie_list[]" value="';
       echo $row["mid"];
       echo '">'.$row["movie_name"].
       " ".$row["year"].
       " <b>Genres: </b>";
       $tempmid = $row["mid"];
       $query2 = "select * from genre where mid = '$tempmid'";
       $result2 = mysqli_query($connection, $query2);
       if (!$result2) {
           die("databases query failed.");
       }
       while ($row2 = mysqli_fetch_assoc($result2)) {
           echo $row2["genre_type"].
           " ";
       }
       echo "<br>";
       mysqli_free_result($result2);

   }
   mysqli_free_result($result);
?>