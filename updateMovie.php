<?php
/**
* Updates a specified movie with a new name and year
*/
   include 'connectdb.php';
   $movieName = $_POST["name"];
   $movieYear = $_POST["year"];
   $mid = $_POST["updateMovie"];
   $query = "update movie set movie_name = '$movieName', year = '$movieYear' where 
   mid = '$mid'";
    if (!mysqli_query($connection, $query)) {
        die("Error: update failed" . mysqli_error($connection));
    }
    echo "Your movie was updated!";
    mysqli_close($connection);
?>