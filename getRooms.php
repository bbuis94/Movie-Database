<?php
/**
 * Displays a list of rooms in the database and allows the user to select one
 */
$query = "select * from room";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo '<input type="radio" name="getRoom" value="';
    echo $row["number"];
    $temp = $row["number"];
    echo '">'.$row["number"].
    " ".$row["capacity"].
    "<br>";
}

mysqli_free_result($result);
?>