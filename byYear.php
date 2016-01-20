<?php
/**
* Lists all movies in the database ordered by the year they were produced
*/
  include 'connectdb.php';
  echo "<h1> Movies ordered by year: </h1>";
  echo "<br>";
  $query = "select * from movie order by year";
  $result = mysqli_query($connection, $query);
  if (!$result) {
      die("databases query failed.");
  }
  while ($row = mysqli_fetch_assoc($result)) {
      echo $row["movie_name"].
      " ".$row["year"].
      "<br>";
  }
  mysqli_free_result($result);
?>