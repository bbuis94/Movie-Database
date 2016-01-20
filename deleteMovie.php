<?php
include 'connectdb.php';
/**
* Deletes all movies specified by the user 
*/
if (!empty($_POST['movie_list'])) {
    foreach($_POST['movie_list'] as $movie) {
        $query = "select * from genre";
        $query2 = "select * from showing";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("databases query failed.");
        }
        $result2 = mysqli_query($connection, $query2);
        if (!$result2) {
            die("databases query failed.");
        }
/**
* Deletes all entries in the genre table that are associated with the movie about to be deleted
*/
        while ($row = mysqli_fetch_assoc($result)) {
            $query3 = "delete from genre where mid = $movie";
            if (!mysqli_query($connection, $query3)) {
                die("Error: deletion failed".mysqli_error($connection));
            }
        }
/**
* Deletes all entries in the watches table that are associated with the movie about to be deleted
*/
        while ($row2 = mysqli_fetch_assoc($result2)) {
            $tempsid = $row2["sid"];
            $query5 = "select * from watches where sid = $tempsid";
            $result3 = mysqli_query($connection, $query5);
            if (!$result3) {
                die("databases query failed.");
            }


            while ($row3 = mysqli_fetch_assoc($result3)) {
                $query6 = "delete from watches where sid = $tempsid";
                if (!mysqli_query($connection, $query6)) {
                    die("Error: deletion failed".mysqli_error($connection));
                }
            }
/**
* Deletes all showings associated with the movie that is about to be deleted
*/
            $query7 = "delete from showing where mid = $movie";
            if (!mysqli_query($connection, $query7)) {
                die("Error: deletion failed".mysqli_error($connection));
            }


        }
        mysqli_free_result($result);
        mysqli_free_result($result2);
/**
* Deletes the current entry in the specified movie list of the movie table
*/
        $query = "delete from movie where mid = '$movie'";
        if (!mysqli_query($connection, $query)) {
            die("Error: deletion failed".mysqli_error($connection));
        }
    }
}

echo "Your movies have been deleted!";
mysqli_close($connection);
?>