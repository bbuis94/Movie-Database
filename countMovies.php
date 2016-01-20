<?php
/**
* Lists the number of movies associated with a particular genre as specified by the user
*/
include 'connectdb.php';
echo "<h1> Total Movies: </h1>";
echo "<br>";
$genre = $_POST["genres"];
$query = "select count(movie.mid) as movies from genre, movie where genre.mid = movie.mid and genre_type = '$genre'";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["movies"].
    "<br>";
}
mysqli_free_result($result);
?>