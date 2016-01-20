<?php
/**
* Creates a list of movies in the database for the user to select from
*/
   $query = "select * from movie";
  $result = mysqli_query($connection, $query);
  if (!$result) {
      die("databases query failed.");
  }
  while ($row = mysqli_fetch_assoc($result)) {
      echo '<input type="radio" name="updateMovie" value="';
      echo $row["mid"];
      echo '">'.$row["movie_name"].
      " ".$row["year"].
      " <b> Genres: </b>";
      $tempmid = $row["mid"];
/**
* Lists the genres associated with each movie beside them
*/
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