<?php
/**
* Updates a genre that is associated with a movie with a new type
*/
	include 'connectdb.php';
	$newGenre = $_POST["newGenre"];
	$oldGenre = $_POST["genres"];
	$mid = $_POST["updateMovie"];
	$query = "update genre set genre_type = '$newGenre' where genre_type = '$oldGenre' and mid = '$mid'";
	if (!mysqli_query($connection, $query)) {
        	die("Error: Updating genre failed" . mysqli_error($connection));
    	}
	mysqli_close($connection);
	echo "That genre was successfully modified!";
?>