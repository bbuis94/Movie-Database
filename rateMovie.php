<?php
/**
* Allows the user to give a rating of 1-5 stars to a movie they've seen 
*/
   include 'connectdb.php';
   $selection = explode(',',$_POST["getShowing"]);
   $sid = $selection[0];
   $cid = $selection[1];
   $rating = $_POST["rating"];
   $query = "update watches set rating = '$rating' where sid = '$sid' and cid = '$cid'";
    if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
    echo "You have rated a movie!";
    mysqli_close($connection);
?>