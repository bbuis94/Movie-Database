<?php
/**
* Deletes all specified genres from a movie specified by the user
*/
include 'connectdb.php';
if (!empty($_POST['genre_list'])) {
    foreach($_POST['genre_list'] as $genre) {
        $query = "delete from genre where mid = $_POST[updateMovie] and genre_type = '$genre'";
        if (!mysqli_query($connection, $query)) {
            die("Error: Deletion failed".mysqli_error($connection));
        }
    }
}
echo "Those genres were removed!";
mysqli_close($connection);
?>