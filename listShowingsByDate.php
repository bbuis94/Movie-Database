<?php
/**
* Lists all of the showings in a given range of dates 
*/
   include 'connectdb.php';
   echo "<h1> Showings list: </h1>";
   echo"<br>";
   $minDate = $_POST["minDate"];
   $maxDate = $_POST["maxDate"];
/**
* Lists all of the showings in the date range that have been watched by customers
*/
   $query = "select distinct movie_name, year, time, showing.sid, date, count(*) as 'customers', capacity from movie, showing, room, watches where 
   movie.mid = showing.mid and showing.number = room.number and showing.sid = watches.sid and date >= '$minDate' and date <= '$maxDate' group by sid";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
/**
* Lists all of the showings in the date range that have not been watched by customers
*/
    $query2 = "select distinct movie_name, year, time, showing.sid, date from movie, showing, room, watches where 
   movie.mid = showing.mid and showing.number = room.number and showing.sid not in (select sid from watches) and date >= '$minDate' and date <= '$maxDate' group by sid";
   $result2 = mysqli_query($connection,$query2);
   if (!$result2) {
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
?>