<?php
/**
 * Lists all customers that are in the database
 */
include 'connectdb.php';
echo "<h1> Customer list: </h1>";
echo "<br>";
$query = "select * from customer";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["first_name"].
    " ".$row["last_name"].
    "<br>";
}
mysqli_free_result($result);
?>