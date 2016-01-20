<?php
/**
 * Adds a movie to the database
 */
include 'connectdb.php';
$movieName = $_POST["name"];
$movieYear = $_POST["year"];
$mid = $_POST["id"];
$genre_list = explode(',', $_POST[genres]);
$query = "insert into movie (mid, movie_name, year) values  ('$mid', '$movieName', '$movieYear')
";
if (!mysqli_query($connection, $query)) {
    die("Error: insert failed".mysqli_error($connection));
}
if ($genre_list[0] != '') {
    foreach($genre_list as $genre) {
        $query = "insert into genre(mid,genre_type) values ('$mid', '$genre')";
        if (!mysqli_query($connection, $query)) {
            die("Error: insert failed".mysqli_error($connection));
        }
    }
}
echo "Your movie was added!";
mysqli_close($connection);
?>