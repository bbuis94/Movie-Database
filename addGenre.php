<?php
/**
 * Adds any number of genres specified by the user to a specified movie
 */
include 'connectdb.php';
if (!empty($_POST['genre_list'])) {
    foreach($_POST['genre_list'] as $genre) {
        $query = "insert into genre (mid, genre_type) 
        values('$_POST[updateMovie]', '$genre')
        ";
        if (!mysqli_query($connection, $query)) {
            die("Error: insert failed".mysqli_error($connection));
        }
    }
}
echo "Those genres were added to your movie!";
mysqli_close($connection);
?>