<?php
/**
* Deletes a specified room from the database
*/
include 'connectdb.php';
$number = $_POST['getRoom'];
$query = "select max(number) as maxnumber from room";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
$row = mysqli_fetch_assoc($result);
$newnum = $row["maxnumber"] + 1;
mysqli_free_result($result);
$query = "select capacity from room where number = $number";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
$row = mysqli_fetch_assoc($result);
$capacity = $row["capacity"];
mysqli_free_result($result);
/**
* Before a room is a deleted, a new room is created to move all of the showings that used the old room to 
*/
$query = "insert into room (number, capacity) values ('$newnum', '$capacity')";
if (!mysqli_query($connection, $query)) {
    die("Error: insertion failed".mysqli_error($connection));
}
$query2 = "update showing set number = $newnum where number = $number";
if (!mysqli_query($connection, $query2)) {
    die("Error: Update failed".mysqli_error($connection));
}
/**
* After all showings have been moved, the specified room is deleted
*/
$query3 = "delete from room where number = $number";
if (!mysqli_query($connection, $query3)) {
    die("Error: deletion failed".mysqli_error($connection));
}
echo "Your room has been deleted!";
mysqli_close($connection);

?>