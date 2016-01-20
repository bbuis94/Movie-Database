<?php
/**
* Displays a list of genres associated with movies in the database for the user to select from
*/
$query = "select distinct genre_type from genre";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo '<input type="radio" name="genres" value="';
    echo $row["genre_type"];
    echo '">'.$row["genre_type"].
    "<br>";
}
mysqli_free_result($result);
?>