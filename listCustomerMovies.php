<?php
/**
 * Lists all of the movies that a selected customer has viewed along with the ratings they've given them
 */
include 'connectdb.php';
echo "<h1> Movies and Ratings: </h1>";
echo "<br>";
$cid = $_POST["getCustomer"];
$query = "select distinct movie_name, rating from watches, showing, movie where watches.cid = '$cid' and showing.sid = watches.sid and movie.mid = showing.mid";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["movie_name"].
    " ".$row["rating"].
    "<br>";
}
mysqli_free_result($result);
?>