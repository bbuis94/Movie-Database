<?php
/**
 * Lists all of the movies in the database in alphabetical order
 */
include 'connectdb.php';
echo "<h1> Movies in alphabetical order: </h1>";
echo "<br>";
$query = "select * from movie order by movie_name";
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