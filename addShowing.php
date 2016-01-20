<?php
/**
 * Adds a showing to the database
 */
include 'connectdb.php';
$number = $_POST["getRoom"];
$mid = $_POST["updateMovie"];
$time = $_POST["time"];
$sid = $_POST["sid"];
$date = $_POST["date"];
$query = "insert into showing (sid, date, time, mid, number) values  ('$sid', '$date', '$time', '$mid', '$number')
";
if (!mysqli_query($connection, $query)) {
    die("Error: insert failed".mysqli_error($connection));
}
echo "The showing has been added!";
mysqli_close($connection);
?>