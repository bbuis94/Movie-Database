<?php
/**
 * Deletes a specified showing from the database
 */
include 'connectdb.php';
$sid = $_POST['getShowing'];
/**
 * Removes the showing from the watches table to eliminate any issues with deleting the showing
 */
$query = "delete from watches where sid = $sid";
if (!mysqli_query($connection, $query)) {
    die("Error: deletion failed".mysqli_error($connection));
}

$query2 = "delete from showing where sid = $sid";
if (!mysqli_query($connection, $query2)) {
    die("Error: deletion failed".mysqli_error($connection));
}

echo "Your showing has been deleted!";
mysqli_close($connection);
?>