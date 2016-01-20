<?php
/**
 * Displays a list of genres in the database and allows the user to select as many as they want
 */
$query = "select distinct genre_type from genre";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo '<input type="checkbox" name="genre_list[]" value="';
    echo $row["genre_type"];
    echo '">'.$row["genre_type"].
    "<br>";
}
mysqli_free_result($result);
?>