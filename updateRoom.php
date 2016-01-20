<?php
/**
* Updates a specified room with a new capacity
*/
   include 'connectdb.php';
   $capacity = $_POST["capacity"];
   $currentNo = $_POST["getRoom"];
   $query = "update room set capacity = '$capacity' where 
   number = '$currentNo'";
    if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
    echo "Your movie was updated!";
    mysqli_close($connection);
?>