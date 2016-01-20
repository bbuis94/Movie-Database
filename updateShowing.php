<?php
/**
* Updates a specified showing with a new room, movie, time and date
*/
   include 'connectdb.php';
   $number = $_POST["getRoom"];
   $mid = $_POST["updateMovie"];
   $time = $_POST["time"];
   $sid = $_POST["getShowing"];
   $date = $_POST["date"];
   $query = "update showing set number = '$number', mid = '$mid', time = '$time', date = '$date' where 
   sid = '$sid'";
    if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
    echo "The showing has been updated!";
    mysqli_close($connection);
?>