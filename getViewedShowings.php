<?php
/**
 * Lists all of the movies that a customer has viewed in order to give them the ability to select one to rate
 */
$cid = $_POST["getCustomer"];
$query = "select * from watches, showing, movie where $cid = watches.cid
and watches.sid = showing.sid and showing.mid = movie.mid ";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo '<input type="radio" name="getShowing" value="';
    echo $row["sid"].
    ','.$row["cid"];
    echo '">'.$row["sid"].
    " ".$row["date"].
    " ".$row["time"].
    " ".$row["movie_name"].
    "<br>";
}

mysqli_free_result($result);
?>