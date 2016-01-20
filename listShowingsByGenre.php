<?php
/**
* Lists all of the showings associated with a particular genre
*/
   include 'connectdb.php';
   echo "<h1> Showings list: </h1>";
   echo"<br>";
   $genre = $_POST["genres"];
/**
* Retrieves all of the showings that have been watched by customers
*/
   $query = "select distinct movie_name, year, time, date, showing.sid, count(*) as 'customers', capacity from movie, genre, showing, room, watches where movie.mid = genre.mid and genre_type = '$genre'
   and movie.mid = showing.mid and showing.number = room.number and showing.sid = watches.sid group by sid";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
/**
* Retrives all of the showings that have not been watched by customers 
*/
   $query2 = "select distinct movie_name, year, time,date, showing.sid from movie, genre, showing, room, watches where movie.mid = genre.mid and genre_type = '$genre'
   and movie.mid = showing.mid and showing.number = room.number and showing.sid not in (select sid from watches) group by sid";
   $result2 = mysqli_query($connection,$query2);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo $row["movie_name"] . " " . $row["year"] . " ".  $row["time"]. " ". $row["date"]."<br>";	
	if ($row["customers"] > $row["capacity"])
	{
		echo "There are no seats left in this theater". "<br>";
	}
   }
  while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2["movie_name"] . " " . $row2["year"] . " ".  $row2["time"]. " ". $row2["date"]."<br>";	
   }
   mysqli_free_result($result);
   mysqli_free_result($result2);
?>