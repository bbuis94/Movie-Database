<?php
/**
 * Displays a list of movies that have received an average of four or more stars
 */
include 'connectdb.php';
echo "<h1> Movies with Four or More Stars: </h1>";
echo "<br>";
$query = "select distinct movie_name from movie, showing, watches where movie.mid = showing.mid and showing.sid = watches.sid and (select avg(rating) from watches) >= 4";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["movie_name"].
    "<br>";
}
mysqli_free_result($result);
?>