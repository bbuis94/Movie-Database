<?php
/**
* Lists all showings that exist in the database
*/
   include 'connectdb.php';
   echo "<h1> Showings list: </h1>";
   echo"<br>";
   $query = "select * from showing";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo $row["sid"] . " " . $row["date"] . " ". $row["time"] . " " . $row["mid"] . " " . $row["number"]."<br>";
   }
   mysqli_free_result($result);
?>