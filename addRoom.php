<?php
/**
 * Adds a room to the database
 */
include 'connectdb.php';
$roomNumber = $_POST["roomNumber"];
$capacity = $_POST["capacity"];
$query = "insert into room (number, capacity) values  ('$roomNumber', '$capacity')
";
if (!mysqli_query($connection, $query)) {
    die("Error: insert failed".mysqli_error($connection));
}
echo "The theater room has been added!";
mysqli_close($connection);
?>