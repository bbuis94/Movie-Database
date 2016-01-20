<?php
/**
 * Lists all showings in theater rooms that are not full
 */
include 'connectdb.php';
echo "<h1> Showings list: </h1>";
echo "<br>";
/**
 * Retreives all showings that have been watched by customers
 */
$query = "select distinct movie_name, year, time, showing.sid, date, count(*) as 'customers', capacity from movie, showing, room, watches where 
movie.mid = showing.mid and showing.number = room.number and showing.sid = watches.sid group by sid ";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
/**
 * Retrieves all showings that have not been watched by customers
 */
$query2 = "select distinct movie_name, year, time, showing.sid, date from movie, showing, room, watches where 
movie.mid = showing.mid and showing.number = room.number and showing.sid not in (select sid from watches) group by sid ";
$result2 = mysqli_query($connection, $query2);
if (!$result2) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    if ($row["customers"] < $row["capacity"]) {
        echo $row["movie_name"].
        " ".$row["year"].
        " ".$row["time"].
        " ".$row["date"].
        "<br>";
    }
}
while ($row2 = mysqli_fetch_assoc($result2)) {
    echo $row2["movie_name"].
    " ".$row2["year"].
    " ".$row2["time"].
    " ".$row2["date"].
    "<br>";
}
mysqli_free_result($result);
?>